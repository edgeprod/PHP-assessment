<?php

namespace interview;

class Logging
{
    // Fixed indentation and added a proper method declaration
    public static function logDBErrorAndExit($error)
    {
        // Used die() function to stop the script and display an error message
        die('An Error Occurred: ' . $error);
    }
}
