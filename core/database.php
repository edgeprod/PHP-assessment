<?php

namespace Interview;

class Database
{
    protected $link;
    protected $connected;

    public function __construct() 
    {
        $credentials = new ConfigDatabase();

        try {
            $this->link = new \PDO(
                'mysql:host=' . $credentials->getHost() . ';dbname=' . $credentials->getDatabase(),
                $credentials->getUser(),
                $credentials->getPass(),
                [
                    \PDO::ATTR_EMULATE_PREPARES => false,
                    \PDO::ATTR_ERRMODE          => \PDO::ERRMODE_EXCEPTION,
                ]
            );
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    public function insert(string $tableName, array $columns, array $data, bool $ignore = false): void
    {
        $statement = "INSERT";

        if ($ignore) {
            $statement .= " IGNORE";
        }

        $statement .= " INTO `" . $tableName . "` (";
        $statement .= implode(", ", $columns);
        $statement .= ") VALUES (";
        $statement .= implode(", ", array_fill(0, count($data), "?"));
        $statement .= ")";

        try {
            $insert = $this->link->prepare($statement);
            $insert->execute($data);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    public function updateOne(string $tableName, string $column, $data, string $where, $condition): void
    {
        $statement = "UPDATE `" . $tableName . "` SET `" . $column . "` = ? WHERE `" . $where . "` = ?";

        try {
            $update = $this->link->prepare($statement);
            $update->execute([$data, $condition]);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    public function getArray(string $statement): ?array
    {
        try {
            $sql = $this->link->query($statement);
            $results = $sql->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
            return null;
        }

        return $results ?: false;
    }
}

// EOF
