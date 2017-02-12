<?php

namespace App;
define('ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);

class Autoloader {

    public function __construct() {
        spl_autoload_register(array($this, 'loadclass'));
    }

    public static function register() {
        new Autoloader();
    }

    public function loadclass($class_name) {
        $file = "../".self::setPath($class_name);

        if (file_exists($file)) {
            require_once($file);
        }
    }
    
    public static function setPath($class_name) {
        return strtolower(str_replace('\\', '/', $class_name)) . '.php';
    }

}
