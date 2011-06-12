<?php

namespace core;
use core\error\iError;

class Error implements iError {
    
    public function handle($error) {
        return $error;
    }
}