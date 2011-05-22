<?php

namespace core\database;
use core\database\iDatabase;
use core\config\iConfig;

class MysqlDb implements iDatabase {
    
    private $username;
    private $password;
    private $dbname;
    private $host;
    
    public function __construct(iConfig $config) {
        $this -> config = $config;
        return $this -> getConnection();
    }
    
    public function setData() {
        $this -> username = $this -> config -> getValue('database', 'username');
        $this -> password = $this -> config -> getValue('database', 'password');
        $this -> dbname = $this -> config -> getValue('database', 'dbname');
        $this -> host = $this -> config -> getValue('database', 'host');
    }
    
    public function getConnection() {
        $this -> setData();
        
        $cfg = \ActiveRecord\Config::instance();
        $cfg -> set_model_directory('./model/');  
        $cfg -> set_connections(array('development' => 'mysql://'.$this->username.':'.$this->password.'@'.$this->host.'/'.$this->dbname.''));
    }
    
}