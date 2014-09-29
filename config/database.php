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
        'pass'     => 'root'
    );

    /**
     * This method returns hosts name
     * 
     * @method getHost
     * @return string 
     */
    public function getHost()
    {
        return $this->credentials['host'];
    }

    /**
     * This method returns port
     *
     * @method getPort
     * @return int
     */
    public function getPort() 
    {
        return $this->credentials['port'];
    }

    /**
     * This method returns database name
     *
     * @method getDatabase
     * @return string
     */
    public function getDatabase()
    {
        return $this->credentials['database'];
    }

    /**
     * This method returns database username
     *
     * @method getUser
     * @return string
     */
    public function getUser()
    {
        return $this->credentials['user'];
    }

    /**
     * This method returns database password
     *
     * @method getPass
     * @return mixed
     */
    public function getPass()
    {
        return $this->credentials['pass'];
    }
}
