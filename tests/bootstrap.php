<?php
/**
 * PHPUnit Bootstrap File
 * 
 * This file is executed before running any tests.
 * It sets up the testing environment and includes necessary files.
 */

// Include Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Set error reporting for testing
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Set timezone if not already set
if (!ini_get('date.timezone')) {
    date_default_timezone_set('UTC');
}

