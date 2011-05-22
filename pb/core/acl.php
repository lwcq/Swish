<?php

namespace core;
use core\acl\xmlAccess;

class ACL {
    
    public static function factory($type) {
  		switch ($type) {
			case 'xml': return new xmlAccess();
        }
    }
        
}