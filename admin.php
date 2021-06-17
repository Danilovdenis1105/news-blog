<?php
include_once "config_example.php";

spl_autoload_register(function($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $classPath = 'classes' . DIRECTORY_SEPARATOR . $class . '.php';
    if ($classPath) {
        include_once $classPath;
        return true;
    }
    return false;
});
/*unset($_COOKIE['PHPSESSID']);*/
Router::init();