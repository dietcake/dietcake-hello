<?php
define('ENV_PRODUCTION', false);
define('APP_HOST', 'hello.example.com');
define('APP_BASE_PATH', '/');
define('APP_URL', 'http://hello.example.com/');

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');
ini_set('error_log', LOGS_DIR.'php.log');
ini_set('session.auto_start', 0);
