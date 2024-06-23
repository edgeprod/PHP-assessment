<?php

namespace interview;

class Config_Database
{
    private array $credentials = [
        'host' => 'localhost',
        'port' => 3306,
        'database' => 'technical_assessment',
        'user' => 'questions',
        'pass' => 'answers'
    ];

    public function getHost(): string
    {
        return $this->credentials['host'];
    }

    public function getPort(): int
    {
        return $this->credentials['port'];
    }

    public function getDatabase(): string
    {
        return $this->credentials['database'];
    }

    public function getUser(): string
    {
        return $this->credentials['user'];
    }

    public function getPass(): string
    {
        return $this->credentials['pass'];
    }
}
