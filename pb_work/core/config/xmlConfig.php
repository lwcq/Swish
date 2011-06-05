<?php

namespace core\config;

class xmlConfig implements iConfig {
    
    private $file = 'config/config.xml';
    
    public function __construct() {
        $dom = new \DOMDocument();
        $dom -> load($this -> file);
        $this -> xpath = new \DOMXPath($dom);
    }
    
    public function getValue($collection, $name) {
        $names = $this -> xpath -> query('/config/'.$collection.'//'.$name.'');

        foreach ($names as $name)
           return (string)$name -> nodeValue;
    }
}