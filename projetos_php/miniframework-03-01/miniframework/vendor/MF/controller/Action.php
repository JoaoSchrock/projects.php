<?php

    namespace MF\controller;

    abstract class Action{
        protected $view;

        public function __construct(){
            $this->view = new \stdClass();
        }

        protected function render($view,$layout){
            $this->view->page = $view;


            if(file_exists( "../App/Views/".$layout.".phtml")){
                require_once "../App/Views/".$layout.".phtml";
            }else{
                $this->content();
            }
        }

        protected function content(){
            $className =  get_class();
            $className =  str_replace('App\\Controllers\\','',$className);
            $className = strtolower(str_replace('Controller','',$className));
            require_once '../App/Views/index/'.$className.'/'.$this->view->page.'.phtml';
        }
        
    }

?>