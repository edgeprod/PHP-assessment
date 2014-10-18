<?php

require_once __DIR__ . "\..\boot.php";

class BasicTest extends PHPUnit_Framework_TestCase
{
    public function testConfigLoaded()
    {
        $this->assertClassHasAttribute('credentials', '\interview\Config\Config_Database');
    }
    //--------------------------------------------------------------------------


    public function testLoggingLoaded()
    {
        $this->assertInstanceOf('\Interview\core\Logging', new \interview\core\Logging);
    }
    //--------------------------------------------------------------------------


    public function testDatabaseLoaded()
    {
        $this->assertInstanceOf('\Interview\core\Database', new \interview\core\Database);
    }
    //--------------------------------------------------------------------------
}
