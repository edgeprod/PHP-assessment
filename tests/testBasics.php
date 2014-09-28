<?php

require_once __DIR__ . "/../boot.php";

class BasicTest extends PHPUnit_Framework_TestCase
{
    public function testConfigLoaded()
    {
        $this->assertClassHasAttribute('credentials', '\interview\ConfigDatabase');
    }
    //--------------------------------------------------------------------------


    public function testLoggingLoaded()
    {
        $this->assertInstanceOf('\interview\Logging', new \interview\Logging);
    }
    //--------------------------------------------------------------------------


    public function testDatabaseLoaded()
    {
        $this->assertInstanceOf('\interview\Database', new \interview\Database);
    }
    //--------------------------------------------------------------------------
}
