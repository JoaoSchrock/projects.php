<?php
    namespace App\Controllers;
    use MF\Controller\Action; 
    use App\Models\Info;
    use App\Models\Produto;

    use MF\Model\Container;

    class IndexController extends Action{
        public function index(){
            //$this->view->dados=array('Sofá', 'Cama','Travesseiro');

            $produto = Container::getModel('Produto');

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index','layout1');    
        }
        
        public function sobreNos(){

            $infos = Container::getModel('Info');

            $info = $infos->getInformacoes();

            $this->view->dados = $info;
            
            $this->render('sobreNos','layout2');             
        }      
    }

?>