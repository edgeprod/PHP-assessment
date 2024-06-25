<?php

namespace interview;

use config\Config_Database; // Correct namespace for Config_Database
use PDO;
use PDOException;

class Database
{
    protected $link;
    protected $connected;

    public function __construct()
    {
        $credentials = new Config_Database(); 
        try {
            $this->link = new PDO(
                'mysql:host=' . $credentials->getHost() . ';dbname=' . $credentials->getDatabase(),
                $credentials->getUser(),
                $credentials->getPass(),
                array(
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION
                )
            );
            $this->connected = true; 
        } catch (PDOException $e) {
            
            $this->connected = false;
           
        }
    }

    public function isConnected()
    {
        return $this->connected;
    }

    public function insert($tableName, $columns, $data, $ignore = false)
    {
       
    }

    public function updateOne($tableName, $column, $data, $where, $condition)
    {
       
    }

    public function getArray($statement)
    {
        
    }
}
