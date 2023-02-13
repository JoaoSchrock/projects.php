<?php

    class Pai{
        public $idade;
        private $nome;
        protected $id;

        function __getIdade(){
           return $this->idade;
        }

        function __setIdade($idade){
            $this->idade = $idade;
         }

         function __get($variavel){
            return $this->$variavel;
         }
         function __set($variavel, $valor){
            $this->$variavel = $valor;
         }
    }

    $pai = new Pai();
    $pai->__setIdade(30);
    // echo $pai->getIdade();
    $pai->idade = 40;
    echo $pai->__getIdade();
    echo '<br>';
    

    $pai->__set('nome','João');
    echo $pai->__get('nome');
    echo '<br>';

    $pai->nome = 'Luan';
    echo $pai->__get('nome');

?>