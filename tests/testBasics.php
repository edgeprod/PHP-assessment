<?php

require_once __DIR__ . "/../boot.php";

class BasicTest extends PHPUnit_Framework_TestCase {

    public function testConfigLoaded()
    {
        $this->assertClassHasAttribute('credentials', '\Interview\Config\Config_Database');
    }

    //--------------------------------------------------------------------------


    public function testLoggingLoaded()
    {
        $this->assertInstanceOf('\Interview\Core\Logging', new \Interview\Core\Logging());
    }

    //--------------------------------------------------------------------------


    public function testDatabaseLoaded()
    {
        $this->assertInstanceOf('\Interview\Core\Database', new \Interview\Core\Database());
    }

    //--------------------------------------------------------------------------
}
