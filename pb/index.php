<?php
session_start();

require('./vendor/ActiveRecord.php');
require('./vendor/OPT/Opl/Base.php');
require('./core/autoloader/GenericLoader.php');

try {
    $loader = new Opl\Autoloader\GenericLoader();
    $loader -> addNamespace('core');
    $loader -> addNamespace('model');
    $loader -> addNamespace('controller');
    $loader -> addNamespace('helper');
    $loader -> register();
    
    $legacyLoader = new Opl\Autoloader\GenericLoader('vendor/OPT', '_');
    $legacyLoader -> addNamespace('Opt');
    $legacyLoader -> addNamespace('Opl');
    $legacyLoader -> register();
    
    core\Database::factory('mysql', core\Config::factory('xml'));
    
    $request = new core\Request;
    $router = new core\Router($request);
    
    $core = new core\Dispatcher($router);
    $core -> init();
    
} catch(Exception $e) {
    echo $e -> selectActionByPriority();
}