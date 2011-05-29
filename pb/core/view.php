<?php

namespace core;
use core\view\iView;
use core\Core;

class View implements iView {
    
    private $view;
    private $data;
    
    public function __construct($moduleView) {
        $this -> moduleView = $moduleView;
        $this::init();
    }
    
    private static function init() {
        $tpl = new \Opt_Class;
        $tpl -> gzipCompression = false;
        $tpl -> stripWhitespaces = false;
        $tpl -> sourceDir = './templates/';
        $tpl -> compileDir = './templates_c/';
        $tpl -> contentType = \Opt_Output_Http::HTML;
        $tpl -> charset = 'utf-8';
        $tpl -> setup();
    }
     
    public function render() { 
        $view = new \Opt_View('index.tpl');
        $view -> modules = array(0 => array('view' => $this -> moduleView));
        $view -> site = Core::site();
  
        $out = new \Opt_Output_Http;
        $out -> setContentType();
        $out -> render($view);
    }
}