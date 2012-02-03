<?php
// 実行環境
define('ENV_PRODUCTION', true);
define('APP_HOST', 'hello.example.net');
define('APP_BASE_PATH', '/');
define('APP_URL', 'http://hello.example.net/');

ini_set('error_log', LOGS_DIR.'php.log');
ini_set('session.auto_start', 0);
