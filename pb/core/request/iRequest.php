<?php

namespace core\request;

interface iRequest {
    
    public function get($type, $name);
    public function getAsArray($type);
}