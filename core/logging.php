<?php

namespace interview;

/**
 * Log Exceprions/Errors.
 */
class Logging {

    public static function logDBErrorAndExit($error)
    {
        die('An Error Occurred: ' . $error); 
    }

}