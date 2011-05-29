<?php

namespace core;

use core\Core;
use core\request\iRequest;
use core\config;

class Router extends Core {
    
    public $controller;
    public $action;
    public $params;
    
    private $request;
    private $config;
    
    public function __construct(iRequest $request) {
        $this -> request = $request;
        $this -> config = Config::factory('xml');
    }
    
    public function run() {
        $data = $this -> request -> getRouteData();
        
        if(count($data) > 0) {
            $this -> controller = $data[0];
            $this -> action = $data[1];
            
            array_shift($data);
            array_shift($data);    
            $this -> params = $data;     
        }
        return (object)$this;
    }
    
    public function getParams() {
        return (array)$this -> params;
    }
    
    public function getController() {
        if(empty($this -> controller))
            return $this -> config -> getValue('core', 'defaultController');
        else
            return (string)$this -> controller;
    }
    
    public function getAction() {
        if(empty($this -> action))
            return $this -> config -> getValue('core', 'defaultAction');
        else
            return (string)$this -> action;
    }
}