<?php

namespace core;
use core\database\MysqlDb;
use core\config\iConfig;

class Database {
    
    public static function factory($type, iConfig $config) {
  		switch ($type) {
			case 'mysql': return new MysqlDb($config);
        }
    }
        
}