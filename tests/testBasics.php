<?php

require_once __DIR__ . '/../boot.php';

// Added 'use' statements for required classes to follow PSR-1 guidelines
use PHPUnit\Framework\TestCase;
use interview\Config_Database;
use interview\Logging;
use interview\Database;

class BasicTest extends TestCase
{
    public function testConfigLoaded()
    {
        // Changed string to class constant for better readability and to avoid hardcoding class name
        $this->assertClassHasAttribute('credentials', Config_Database::class);
    }

    public function testLoggingLoaded()
    {
        // Changed string to class constant for better readability and to avoid hardcoding class name
        // Added parentheses '()' when instantiating the Logging object
        $this->assertInstanceOf(Logging::class, new Logging());
    }

    public function testDatabaseLoaded()
    {
        // Changed string to class constant for better readability and to avoid hardcoding class name
        // Added parentheses '()' when instantiating the Database object
        $this->assertInstanceOf(Database::class, new Database());
    }
}
