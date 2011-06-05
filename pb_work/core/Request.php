<?php

namespace core;
use core\request\iRequest;
use core\Core;
use core\Config;

class Request extends Core implements iRequest {

	private $aPOST = array();
    private $aGET = array();
	private $aSESSION = array();
    private $aURL = array();
    
    public function __construct() {
        $this -> aPOST = $_POST;
        $this -> aGET = $_GET;
        $this -> aSESSION = $_SESSION;
        $this -> aURL = $_SERVER['REQUEST_URI'];
        
        $this -> file = Config::factory('xml') -> getValue('request', 'file');
    }
    
    public function getRouteData() {
        $array = array('get' => 'aGET', 'url' => 'aURL');
        
        foreach($array as $key => $value) {
            if(count($this -> $value) > 0)
                return $this -> getAsArray($key);
        }
    }
    
    public function get($type, $name) {
        if(is_integer($name))
            $array = $this -> getAsArray($type);
        else
            $array = $this -> getAsArray($type, 1);
        
        if(is_array($array)) {
            if(in_array($name, array_keys($array)))
                return $array[$name];  
        }
    }
    
    public function getAsArray($type, $mode = 0) {
        if($type == 'url')
            return $this -> parseURL();
        else {
            $strType = 'a'.strtoupper($type);
            
      		foreach($this -> $strType as $key => $value) {
      		    if($mode)
                    $this -> vars[$key] = $value;
                else
                    $this -> vars[] = $value;
    		}
            return $this -> vars;
        }
    }
    
    private function parseURL() {
  		if(stristr($_SERVER['REQUEST_URI'], $this -> file)) 
			$tab = explode($this -> file.'/',$_SERVER['REQUEST_URI']);
            
        if(count($tab[1]) > 0)
		  return explode('/', $tab[1]);
    }
    
}
?>