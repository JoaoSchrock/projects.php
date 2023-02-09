<?php

    class usuarioComum extends perfil{
        function __get($variavel){
            return $this->$variavel;
        }

        function __set($variavel,$valor){
            $this->$variavel = $valor;
        }

        function Acessar(){
            echo 'Acessando';
        }

        function Comprar(){
            echo 'Comprando';
        }

    }

    class usuarioAdm extends perfil{
        function __get($variavel){
            return $this->$variavel;
        }

        function __set($variavel,$valor){
            $this->$variavel = $valor;
        }

        function Gerenciar(){
            echo 'Gerenciando Usuarios';
        }

        function Fiscalizar(){
            echo 'Fiscalizando a compra dos Usuarios';
        }
    }

    class perfil{
        public $nome;
        public $email;
        public $senha;
    }

    $UsuarioC = new $UsuarioC();
    $UsuarioC__set('nome','João Schrock');
    $UsuarioC__set('email','JoãoLindo@gmail.com');
    $UsuarioC__set('senha','123456');

    $UsuarioA = new $UsuarioA();
    $UsuarioC__set('nome','Augusto');
    $UsuarioC__set('email','Augusto12@gmail.com');
    $UsuarioC__set('senha','987654');

?>