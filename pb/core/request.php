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
    
    public function get($type, $name) {
        $array = $this -> getAsArray($type);
        
        if(in_array($name, array_keys($array)))
            echo $array[$name];
    }
    
    public function getAsArray($type) {
        if($type == 'url')
            return $this -> parseURL();
        else {
            $strType = 'a'.strtoupper($type);
            
      		foreach($this -> $strType as $key => $value) {
    			$this -> vars[$key] .= $value;
    		}
            return $this -> vars;
        }
    }
    
    private function parseURL() {
  		if(stristr($_SERVER['REQUEST_URI'], $this -> file)) {
			$tab = explode($this -> file.'/',$_SERVER['REQUEST_URI']);
		}
		return explode('/', $tab[1]);
    }
    
}
?>