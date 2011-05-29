<?php

namespace core;
use core\error\iError;

class Error implements iError {
    
    public function get($error) {
        echo $error;
    }
}