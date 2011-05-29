<?php

namespace controller;
use core\Controller;
use core\Core;
use helper\pager;

class User extends Controller {
    
    private $filters = array();
    
    public function __construct() {
        $this -> model = Core::load('model', 'user');
        $this -> pager = Core::load('helper', 'pager');
        $this -> error = Core::load('core', 'error');
        $this -> view = Core::load('core', 'view');
        $this -> request = Core::load('core', 'request');
    }
      
    public function index() {
        return $this -> all();
    }

    public function all() {
       $view = new \Opt_View('user/all.tpl');
           
       $amount = $this -> model -> all();
       $total = count($amount);
       
       $page = $this -> request -> get('url', 2); 
       $pager = new Pager(Core::base().'/user/index', $total, 2, 10);
       $pager -> paginate($page);
       $limit = $pager -> limit;

       $users = $this -> model -> find_by_sql('select * from users LIMIT '.$limit.'');

       foreach($users as $user)
           $tab[] = $user -> attributes(); 
           
       $view -> items = $tab;
       $view -> pager = $pager -> output; 
       return $view;
    }
    
    public function add() {
        $view = new \Opt_View('user/add.tpl'); 
        
        if($this -> request -> get('post', 'submit')) {
            $this -> validator = Core::load('core', 'validator', 1, 'factory', 'form');
            $filters[] = $this -> validator -> checkInput($this -> request -> get('post', 'username'));
            $this -> validator -> execute($filters);
        }
                   
        return $view;
    }
}