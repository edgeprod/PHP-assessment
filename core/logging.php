<?php

namespace Interview\Core;

class Logging
{

    public static function logDBErrorAndExit($error)
    {
        die('An Error Occurred: ' . $error);
    }

    //--------------------------------------------------------------------------
}
