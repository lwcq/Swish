<?php

if (!defined('PHP_VERSION_ID') || PHP_VERSION_ID < 50300)
	die('PHP ActiveRecord requires PHP 5.3 or higher');

define('PHP_ACTIVERECORD_VERSION_ID','1.0');

if (!defined('PHP_ACTIVERECORD_AUTOLOAD_PREPEND'))
	define('PHP_ACTIVERECORD_AUTOLOAD_PREPEND',true); 

require 'ActiveRecord/Singleton.php';
require 'ActiveRecord/Config.php';
require 'ActiveRecord/Utils.php';
require 'ActiveRecord/DateTime.php';
require 'ActiveRecord/Model.php';
require 'ActiveRecord/Table.php';
require 'ActiveRecord/ConnectionManager.php';
require 'ActiveRecord/Connection.php';
require 'ActiveRecord/SQLBuilder.php';
require 'ActiveRecord/Reflections.php';
require 'ActiveRecord/Inflector.php';
require 'ActiveRecord/CallBack.php';
require 'ActiveRecord/Exceptions.php';
require 'ActiveRecord/Cache.php';

if (!defined('PHP_ACTIVERECORD_AUTOLOAD_DISABLE'))
	spl_autoload_register('activerecord_autoload',false,PHP_ACTIVERECORD_AUTOLOAD_PREPEND);

function activerecord_autoload($class_name)
{
	$path = ActiveRecord\Config::instance()->get_model_directory();
	$root = realpath(isset($path) ? $path : '.');

	if (($namespaces = ActiveRecord\get_namespaces($class_name)))
	{
		$class_name = array_pop($namespaces);
		$directories = array();

		foreach ($namespaces as $directory)
			$directories[] = $directory;

		$root .= DIRECTORY_SEPARATOR . implode($directories, DIRECTORY_SEPARATOR);
	}

	$file = "$root/$class_name.php";

	if (file_exists($file))
		require $file;
}
?>