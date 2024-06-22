<?php

namespace interview;

class Database
{
    protected $link;
    protected $connected;

    public function __construct()
    {
        $credentials = new Config_Database();

        try {
            $dsn = 'mysql:host=' . $credentials->getHost() . ';dbname=' . $credentials->getDatabase() . ';port=' . $credentials->getPort();
            $this->link = new \PDO(
                $dsn,
                $credentials->getUser(),
                $credentials->getPass(),
                [
                    \PDO::ATTR_EMULATE_PREPARES => false,
                    \PDO::ATTR_ERRMODE          => \PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    public function insert($tableName, $columns, $data, $ignore = false)
    {
        $statement = "INSERT";

        if ($ignore) {
            $statement .= " IGNORE";
        }

        $statement .= " INTO `" . $tableName . "`";
        $statement .= " (`" . implode('`, `', $columns) . "`)";
        $statement .= " VALUES (" . str_repeat('?, ', count($data) - 1) . "?)";

        try {
            $insert = $this->link->prepare($statement);
            $insert->execute($data);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    public function updateOne($tableName, $column, $data, $where, $condition)
    {
        $statement = "UPDATE `" . $tableName . "` SET `" . $column . "` = ? WHERE `" . $where . "` = ?";

        try {
            $update = $this->link->prepare($statement);
            $update->execute([$data, $condition]);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    public function getArray($statement, $parameters = [])
    {
        try {
            $sql = $this->link->prepare($statement);
            $sql->execute($parameters);
            return $sql->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }

        return false;
    }
}

    }

    public function getPass()
    {
        return $this->credentials['pass'];
    }
}
