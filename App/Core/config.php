<?php

/*set your website title*/

define('WEBSITE_TITLE', "SAFA BCM");

// set your default time-zone
date_default_timezone_set('Africa/Harare');


/*set database variables*/

define('DB_TYPE', 'mysql');
define('DB_NAME', 'safa');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');


/* Email Server Variables */

define('SMTP_USERNAME', 'info@safabc.org');
define('SMTP_PASSWORD', 'v6TN{KUY%k-m');
define('SECRET_KEY', '04011994Flex15$');


/*protocal type http or https*/
define('PROTOCAL', 'http');

/*root and asset paths*/

$path = str_replace("\\", "/", PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("App/Core", "Public", $path));
define('FRONT_ASSETS', str_replace("App/Core", "Public/Assets/front", $path));
define('AUTH_ASSETS', str_replace("App/Core", "Public/Assets/auth", $path));
define('BACK_ASSETS', str_replace("App/Core", "Public/Assets/back", $path));

/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/

define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set("display_errors", 0);
}