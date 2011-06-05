<?php

namespace core\acl;

interface iAccess {
    
    public function checkAccess($controller, $action); 
}