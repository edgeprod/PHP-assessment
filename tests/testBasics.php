<?php

require_once __DIR__ . "/../boot.php";

class BasicTest extends PHPUnit_Framework_TestCase
{
    public function testConfigLoaded()
    {
        $this->assertClassHasAttribute('credentials', '\Interview\ConfigDatabase');
    }

    //--------------------------------------------------------------------------


    public function testLoggingLoaded()
    {
        $this->assertInstanceOf('\Interview\Logging', new \Interview\Logging);
    }

    //--------------------------------------------------------------------------


    public function testDatabaseLoaded()
    {
        $this->assertInstanceOf('\Interview\Database', new \Interview\Database);
    }
    //--------------------------------------------------------------------------
}
