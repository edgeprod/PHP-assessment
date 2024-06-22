<?php

namespace Interview;

class ConfigDatabase
{
    private $credentials = [
        'host'     => 'localhost',
        'port'     => 80,
        'database' => 'php_assessment',
        'user'     => 'root',
        'pass'     => '',
    ];

    public function getHost(): string
    {
        return $this->credentials['host'];
    }

    public function getPort(): ?int
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

// EOF
