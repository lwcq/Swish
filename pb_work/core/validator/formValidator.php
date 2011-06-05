<?php

namespace core\validator;
use core\validator\iValidator;

class formValidator implements iValidator {
    
    public function checkInput($data) {
        if($data == 2)
            return true;
    }
    
    public function execute(array $filters) {
        if(in_array(true, $filters))
            return true;
    }
}