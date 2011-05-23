<?php

namespace core;

class Core {
    
    private $type;
    private $name;
    private $params;
    
    public static function load($type, $name, array $params = array()) {
        $strNS = $type.'\\'.$name;
            
        return new $strNS($params);
    }
}