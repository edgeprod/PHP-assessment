<?php

require_once __DIR__ . '/../boot.php';
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Interview\ConfigDatabase;
use Interview\Logging;
use Interview\Database;

class BasicTest extends TestCase
{
    public function testConfigLoaded(): void
    {
        $this->assertClassHasAttribute('credentials', ConfigDatabase::class);
    }

    public function testLoggingLoaded(): void
    {
        $this->assertInstanceOf(Logging::class, new Logging());
    }

    public function testDatabaseLoaded(): void
    {
        $this->assertInstanceOf(Database::class, new Database());
    }
}

// EOF
