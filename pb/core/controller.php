<?php

namespace core;
use core\Core;
use core\controller\iController;

abstract class Controller extends Core implements iController {
    
    public function index() {}
}