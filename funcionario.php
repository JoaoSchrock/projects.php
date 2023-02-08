<?php

//echo "teste"
//modelo

class funcionario {
    //attributos
    public $nome = "Jose";
    public $telefone = "1234-4567";
    public $numFilhos = "2";
    
    //metodos
 
    function getNumFilhos(){
        echo $this->numFilhos;
    }  
    function setNumFilhos($numFilhos){
         $this->numFilhos = $numFilhos; 
    }
    function getNome(){
        echo $this ->nome; 
    }
    function setNome($nomeFunc){
    $this->nome = $nomeFunc; 
    }
    function getTelefone(){
    echo $this->telefone;
    }
    function setTelefone($telefone){
        $this->telefone = $telefone;
        echo $telefone;
    }
    function resumo(){
        echo "$this->nome possui $this->numFilhos filhos.<br>
        telefone: $this->telefone";
    }
    function __get($variavel){
        echo $this->$variavel;
    }
    function __set($variavel, $valor){
        $this->$variavel = $valor;
    }
}
$nome1 = new Funcionario();
$nome2 = new Funcionario();
$nome1->setNome("Joao");
$nome1->getNumFilhos();
echo $nome1->setNumFilhos(3);
echo "<br>";
$nome1->getNumFilhos();
echo $nome1->gettelefone();
echo "<br>";
echo $nome1->resumo();
echo "<br>";
$nome1 -> setTelefone(7777);
echo $nome2->__get('nome');
echo "<br>";
echo $nome2->__set('nome','joao');
echo $nome2->__get('nome')

?>