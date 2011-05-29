<?php

namespace core;
use core\Core;
use core\Router;
use core\View;

class Dispatcher extends Core {
    
    private $router;
    private $controller;
    private $action;
    private $params;
    
    public function __construct(Router $router) {
        $this -> router = $router;
        
        $this -> router -> run();
        $this -> controller = $this -> router -> getController();
        $this -> action = $this -> router -> getAction();
        $this -> params = $this -> router -> getParams();
    }
    
    public function init() {
        $strNS = 'controller\\'.$this -> controller;
        $strAction = $this -> action;
        
        if(file_exists('controller/'.$this -> controller.'.php')) {
            if(class_exists($strNS)) {
                $reflection = new \ReflectionClass($strNS);
                $obj = $reflection -> newInstance();
            } else
                throw new Exception('Class does not exist', 0);
        } else
            throw new Exception('File does not exist', 0);
        
        if($reflection -> hasMethod($this -> action)) {
            $view = new View($obj -> $strAction($this -> params));
            $view -> render();
        } else
            throw new Exception('Action '.$this -> action.' not found', 1);
            
    }
    
}