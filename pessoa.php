<?php

class Pessoa{
   public $nome = null;

    function __construct($nome){
        echo 'Objeto Criado';
        $this->nome = $nome;
    }  
    function __get($variavel){
        echo $this ->$variavel;
    }  
    function __set($variavel, $valor){
        $this->$variavel = $valor;
    }  
    }  
$pessoa = new Pessoa("Joao Lindao");
echo "<br>";
echo $pessoa->__get('nome');
$pessoa->__set('idade',22);
echo "<br>";
echo $pessoa->__get('idade');
?>
