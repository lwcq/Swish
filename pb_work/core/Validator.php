<?php

namespace core;
use core\validator\formValidator;

class Validator {
    
    public static function factory($type) {
  		switch ($type) {
			case 'form': return new formValidator();
        }
    }
        
}