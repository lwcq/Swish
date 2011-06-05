<?php

namespace core;

class Core {
    
    private $type;
    private $name;
    private $params;
    private $param;
    private $mode;
    private $method;
    
    public static function load($type, $name, $mode = 0, $method = '',$param = '', array $params = array()) {
        $strNS = $type.'\\'.$name;
        
        if(class_exists($strNS)) 
            if(!$mode)   
                return new $strNS($params);
            else
                return $strNS::$method($param);
        else
            throw new \Exception('Class does not exist');
    }
    
    public static function redirect($url) {
        header("location: ".$url."");
    }
    
    public static function base() {
        return Config::factory('xml') -> getValue('core', 'baseUrl');
    }
    
    public static function site() {
        return Config::factory('xml') -> getValue('core', 'siteUrl');
    }
}