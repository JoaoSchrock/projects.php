<?php

    class Carro extends Veiculo{

        function __get($variavel){
            return $this->$variavel;
        }

        function __set($variavel, $valor){
            $this->$variavel = $valor;
        }

        function abrirTeto(){
            echo 'Abrindo teto';
        }

        }

        class Moto extends Veiculo{

            function __get($variavel){
                return $this->$variavel;
            }
    
            function __set($variavel, $valor){
                $this->$variavel = $valor;
            }
    
            function empinar(){
                echo 'Empinando';
            }
        }

        class Veiculo{
            public $placa;
            public $cor;
            public $marca;

            function freiar(){
                echo 'Freiando';
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