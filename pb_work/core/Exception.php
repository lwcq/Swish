<?php

namespace core;
use core\Core;

class Exception extends \Exception {
    
    public function __construct($exception, $priority) {
        $this -> exception = $exception;
        $this -> priority = $priority;
    }
    
    public function selectActionByPriority() {
        if($this -> priority == 0)
            return $this -> get404();
        elseif($this -> priority == 1)
            return $this -> exception;
    }
    
    private function get404() {
        return Core::redirect(Core::site().'media/images/404.jpg');
    }
}