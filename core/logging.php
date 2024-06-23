<?php

namespace interview;

class Logging
{
    public static function logDBErrorAndExit(string $error): void
    {
        die('An Error Occurred: ' . $error);
    }
}
