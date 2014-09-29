<?php

require_once __DIR__ . "/../boot.php";

/**
 * BasicTest class.
 */
class BasicTest extends PHPUnit_Framework_TestCase
{
    /**
     * This method checks config is loaded or not
     *
     * @method testConfigLoaded
     * @return void
     */
    public function testConfigLoaded()
    {
        $this->assertClassHasAttribute('credentials', '\interview\Config_Database');
    }

    /**
     * This method checks logging loaded or not
     *
     * @method testLoggingLoaded
     * @return void
     */
    public function testLoggingLoaded()
    {
        $this->assertInstanceOf('\interview\Logging', new \interview\Logging);
    }

    /**
     * This method checks database loaded or not
     *
     * @method testDatabaseLoaded
     * @return void
     */
    public function testDatabaseLoaded()
    {
        $this->assertInstanceOf('\interview\Database', new \interview\Database);
    }
}
