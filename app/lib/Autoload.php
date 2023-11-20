<?php
namespace PHPMVC;

/**
 *  autolod class....

 */
define('DS', DIRECTORY_SEPARATOR);

define('APP_PATH', dirname(realpath(__FILE__). DS . '..'));
define('PS', PATH_SEPARATOR);
define('CONTROLLERS_PATH', APP_PATH . DS . 'controllers');
define('MODELS_PATH', APP_PATH . DS . 'models');
define('SESSION_SAVE_PATH', dirname(realpath(__FILE__)) . DS . 'sessions');

class Autoload{
    public static function autoload($classname){
        $class = str_replace('\\','/',$classname);
        $classFile = APP_PATH . DIRECTORY_SEPARATOR .strtolower($class) . '.php';
        if(file_exists($classFile)){
            require $classFile;
        }
    }
}

spl_autoload_register(__NAMESPACE__.'\Autoload::autoload');