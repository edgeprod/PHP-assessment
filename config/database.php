<?php

namespace interview;

class Config_Database
{

    private $credentials = array(
        'host'     => 'localhost',
        'port'     => null,
        'database' => 'interview',
        'user'     => 'root',
        'pass'     => 'root'
    );

    public function getHost()
    {
        return $this->credentials['host'];
    }
    //--------------------------------------------------------------------------


    public function getPort()
    {
        return $this->credentials['port'];
    }
    //--------------------------------------------------------------------------


    public function getDatabase()
    {
        return $this->credentials['database'];
    }
    //--------------------------------------------------------------------------


    public function getUser()
    {
        return $this->credentials['user'];
    }
    //--------------------------------------------------------------------------


    public function getPass()
    {
        return $this->credentials['pass'];
    }
    //--------------------------------------------------------------------------
}
