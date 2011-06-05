<?php

namespace core\acl;
use core\acl\iAccess;

class xmlAccess implements iAccess {
    
    private $ranks = array();
    private $controllers = array();
    
    private function  isOptional($controller, $action) {
        $dom = new \DOMDocument();
        $dom -> load('config/access/main.xml');
        
        $xpath = new \DOMXPath($dom);
        $elements = $xpath -> query('/access/optional/'.$controller.'/'.$action.'');
        $result = (bool)$elements -> length;

        if($result)
            return true;
        else
            return false;
        
    }
    
    public function checkAccess($controller, $action) {
        if(!$this -> isOptional($controller, $action)) {
        
            $xml = simplexml_load_file('config/access/'.$controller.'.xml');
            
            foreach($xml -> access -> $action -> rank as $child)
                $ranks[] .= $child; 
            
            if(in_array($_SESSION['rank'], $ranks))
                return true;
            else
                return false;
        } else 
            return true;
    }
}