<?php

namespace core\validator\filter;
use core\Error;

class inputFilter {
    
    private $pattern;
    
    public function __construct() {
        $this -> error = new Error;
    }
    
    public function email($expression) {
        $pattern = '/^([a-z0-9]{1})([^\s\t\.@]*)((\.[^\s\t\.@]+)*)@([a-z0-9]{1})((([a-z0-9-]*[-]{2})|([a-z0-9])*|([a-z0-9-]*[-]{1}[a-z0-9]+))*)((\.[a-z0-9](([a-z0-9-]*[-]{2})|([a-z0-9]*)|([a-z0-9-]*[-]{1}[a-z0-9]+))+)*)\.([a-z0-9]{2,6})([.]?)$/Diu';
        if(preg_match($pattern, $expression))
            return true;
        else
            return $this -> error -> handle('Błędny format adresu e-mail!');
    }
    
    public function password($expression) {
        $pattern = '/^(?=[a-z0-9_#@%\*-]*?[A-Z])(?=[a-z0-9_#@%\*-]*?[a-z])(?=[a-z0-9_#@%\*-]*?[0-9])([a-z0-9_#@%\*-]{8,24})$/Diu';
        if(preg_match($pattern, $expression))
            return true;
        else
            return $this -> error -> handle('Hasło nie spełnia podanych warunków!');
    }
    
    public function username($expression) {
        $pattern = '^[a-zA-Z0-9]{5,15}$^';
        if(preg_match($pattern, $expression))
            return true;
        else
            return $this -> error -> handle('Nazwa użytkownika jest nieprawidłowa!');
    }
}