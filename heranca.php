<?php

    class Carro{
        public $placa;
        public $cor;
        public $marca;

        function __get($variavel){
            return $this->$variavel;
        }

        function __set($variavel, $valor){
            $this->$variavel = $valor;
        }

        function freiar(){
            echo 'Freiando';
        }

        function abrirTeto(){
            echo 'Abrindo teto';
        }

        }

        class Moto{
            public $placa;
            public $cor;
            public $marca;

            function __get($variavel){
                return $this->$variavel;
            }
    
            function __set($variavel, $valor){
                $this->$variavel = $valor;
            }
    
            function freiar(){
                echo 'Freiando';
            }
            function empinar(){
                echo 'Empinando';
            }
        }
    

    

    $car = new Carro();
    $car->__set('placa', 'ody-2588');
    $car->__set('cor', 'vermelho');
    $car->__set('marca', 'Hange Hover');
    $car->freiar();
    print_r($car);

    echo '<br>';

    $moto = new Moto();
    $moto->__set('placa', 'OTW-1342');
    $moto->__set('cor', 'Verde');
    $moto->__set('marca', 'Hornet');
    $moto->empinar();
    print_r($moto);

?>