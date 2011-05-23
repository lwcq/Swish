<?php

namespace controller;
use core\Controller;
use core\Core;

class User extends Controller {
    
    public function __construct() {
        $this -> model = Core::load('model', 'user');
    }
    
    public function index() {
        return $this -> first();
    }
    
    public function first() {
        return $this -> model -> find(array('conditions' => "username = 'admin'")) -> role_id;   
    }
}