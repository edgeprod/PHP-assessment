<?php namespace interview;

/**
 * Logging class.
 */
class Logging
{
	/**
	 * This method log db error and exit
	 *
	 * @method logDBErrorAndExit
	 * @params $error
	 * @return void
     */
    public static function logDBErrorAndExit($error)
    {
        die('An Error Occurred: ' . $error);
    }
}
