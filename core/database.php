<?php

namespace interview;

class Database
{
    protected \PDO $link;
    protected bool $connected;

    public function __construct()
    {
        $credentials = new Config_Database();

        try {
            $this->link = new \PDO(
                'mysql:host=' . $credentials->getHost() . ';dbname=' . $credentials->getDatabase(),
                $credentials->getUser(),
                $credentials->getPass(),
                [
                    \PDO::ATTR_EMULATE_PREPARES => false,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                ]
            );
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    public function insert(string $tableName, array $columns, array $data, bool $ignore = false): void
    {
        $statement = 'INSERT';

        if ($ignore) {
            $statement .= ' IGNORE';
        }

        $statement .= ' INTO `' . $tableName . '`';
        $statement .= ' (' . implode(', ', $columns) . ')';
        $statement .= ' VALUES (' . implode(', ', array_fill(0, count($data), '?')) . ')';

        try {
            $insert = $this->link->prepare($statement);
            $insert->execute($data);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    public function updateOne(string $tableName, string $column, string $data, string $where, string $condition): void
    {
        $statement = 'UPDATE ';
        $statement .= "`{$tableName}`";
        $statement .= ' SET ';
        $statement .= "`{$column}` = ?";
        $statement .= ' WHERE ';
        $statement .= "`{$where}` = ?";

        try {
            $update = $this->link->prepare($statement);
            $update->execute([$data, $condition]);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }
    }

    public function getArray(string $statement, array $params = []): array
    {
        try {
            $query = $this->link->prepare($statement);
            $query->execute($params);
            $results = $query->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            Logging::logDBErrorAndExit($e->getMessage());
        }

        return $results ?? [];
    }
}
