<?php

namespace config;

class Config_Database
{
    private $credentials = array(
        'host'     => 'localhost',
        'port'     => 3306,
        'database' => 'root',
        'user'     => 'mandiseli',
        'pass'     => '10/May/1989'
    );

    public function getHost()
    {
        return $this->credentials['host'];
    }

    public function getPort()
    {
        return $this->credentials['port'];
    }

    public function getDatabase()
    {
        return $this->credentials['database'];
    }

    public function getUser()
    {
        return $this->credentials['user'];
    }

    public function getPass()
    {
        return $this->credentials['pass'];
    }
}
