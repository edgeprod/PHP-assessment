<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use interview\Database; 
use config\Config_Database; 

class DatabaseConnectionTest extends TestCase
{
    public function testDatabaseConnection()
    {
        $db = new Database();
        $this->assertTrue($db -> isConnected(), 'Database connection failed');
    }
}
