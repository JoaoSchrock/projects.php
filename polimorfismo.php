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

            function passarMarcha(){
                return 'Segurar com a mao na embreagem colocar com o pe na marcha';
            }
        }

        class Veiculo{
            public $placa;
            public $cor;
            public $marca;

            function freiar(){
                echo 'Freiando';
            }

            function passarMarcha(){
                return 'Pisar no pé na Embreagem colocar com a mão a marcha';
            }
        }
    

    

    $car = new Carro();
    $car->__set('placa', 'ody-2588');
    $car->__set('cor', 'vermelho');
    $car->__set('marca', 'Hange Hover');
    // $car->freiar();
    // print_r($car);

    echo 'Carro';
    echo $car->passarMarcha();

    echo '<br>';

    $moto = new Moto();
    $moto->__set('placa', 'OTW-1342');
    $moto->__set('cor', 'Verde');
    $moto->__set('marca', 'Hornet');
    // $moto->empinar();
    // print_r($moto);
    echo 'Moto';
    echo $moto->passarMarcha();

    echo '<br>';

    $caminhao = new Caminhao();
    $caminhao->__set('placa', 'OPR-6451');
    $caminhao->__set('cor', 'Branco');
    $caminhao->__set('marca', 'Mercedes');

    echo 'Caminhao';
    echo $caminhao->passarMarcha();


?>