<?php

namespace core\validator;
use core\validator\iValidator;
use core\validator\filter\inputFilter;

class formValidator implements iValidator {
    
    public function checkInput($expression, array $under_filters) {
        $filter = new inputFilter;
        
        foreach($under_filters as $under_filter) {
            return $filter -> $under_filter($expression);
        }
    }
    
    public function execute(array $filters) {
        foreach($filters as $result) {
            if($result == 0)
                $tab[] = $result;
        }
        return $tab;            
    }
}