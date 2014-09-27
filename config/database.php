<?php

namespace interview;

/**
 * Database config class.
 */
class Config_Database
{

    private $credentials = array(
        'host'     => 'localhost',
        'port'     => 3306,
        'database' => 'interview',
        'user'     => 'root',
        'pass'     => ''
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