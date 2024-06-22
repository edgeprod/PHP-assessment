<?php

namespace Interview;

class Logging
{
    public static function logDBErrorAndExit(string $error): void
    {
        die('An Error Occurred: ' . $error);
    }
}

// EOF
