<?php

require_once __DIR__ . '/../boot.php';

use PHPUnit\Framework\TestCase;

class TestBasics extends TestCase
{
    public function testConfigLoaded(): void
    {
        $this->assertClassHasStaticAttribute('credentials', \Interview\ConfigDatabase::class);
    }

    public function testLoggingLoaded(): void
    {
        $this->assertInstanceOf(\interview\Logging::class, new \interview\Logging());
    }

    public function testDatabaseLoaded(): void
    {
        $this->assertInstanceOf(\interview\Database::class, new \interview\Database());
    }
}
