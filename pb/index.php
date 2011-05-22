<?php
session_start();

require('./vendor/ActiveRecord.php');
require('./core/autoloader/GenericLoader.php');

$loader = new Opl\Autoloader\GenericLoader();
$loader->addNamespace('core');
$loader->addNamespace('model');
$loader->addNamespace('controller');
$loader->addNamespace('vendor');
$loader->register();

core\Database::factory('mysql', core\Config::factory('xml'));

$request = new core\Request;
$request -> get('get', 'action');