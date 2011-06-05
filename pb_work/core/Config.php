<?php

namespace core;
use core\config\xmlConfig;

class Config {
    
    private $type;
    
    public static function factory($type) {
  		switch ($type) {
			case 'xml': return new xmlConfig();
        }
    }
        
}