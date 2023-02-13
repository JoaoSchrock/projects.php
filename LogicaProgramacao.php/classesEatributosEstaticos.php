<?php

    class Teste{
        public static $atributoEstaticos = 'Atributo Estatico';
        public $atributo = 'Atributo Comum';

        static function funcaoEstatica(){
            echo 'Essa Funcao e Estatica';
        }

        function funcaoComum(){
            echo 'Essa e um Funcao Comum';
        }
    }

    echo Teste::$atributoEstaticos;

    Teste::funcaoEstatica();
    // Teste::funcaoComum();



?>