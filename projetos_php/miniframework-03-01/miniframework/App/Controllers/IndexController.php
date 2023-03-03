<?php
    namespace App\Controllers;
    use MF\controller\Action;

    class IndexController extends Action{
        public function index(){
            $this->view->dados  = array('Sofá','Cama','Traveceiro','Geladeira');
            $this->render('index', 'layout1');
        }
        
        public function sobreNos(){
            $this->view->dados  = array('Televisão','Computador','HD','SSD');
            $this->render('sobreNos','layout2');
        }

       
    }

?>