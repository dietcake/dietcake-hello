<?php
// アプリケーション
require_once APP_DIR.'app_controller.php';
require_once APP_DIR.'app_model.php';
require_once APP_DIR.'app_exception.php';

require_once HELPERS_DIR.'html_helper.php';

// autoload
spl_autoload_register(function($name) {
    $filename = Inflector::underscore($name) . '.php';
    if (strpos($name, 'Controller') !== false) {
        require CONTROLLERS_DIR . $filename;
    } elseif (strpos($name, 'Master') !== false) {
        require MASTER_DIR . $filename;
    } else {
        if (file_exists(MODELS_DIR . $filename)) {
            require MODELS_DIR . $filename;
        }
    }
});
