<?php

session_start();

/**
 * Kickstart the app.
 */
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/core/logging.php';
require_once __DIR__ . '/models/question.php';
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/core/database.php';
