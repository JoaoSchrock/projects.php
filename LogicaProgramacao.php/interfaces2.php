<?php
    
    interface Mamifero{
        public function respirar();
    }

    interface Terrestre{
        public function andar();
    }

    interface Aquaticos{
        public function nadar();
    }
    class Humano implements Mamifero, Terrestre{
        function respirar(){
            return 'Este respira pelo nariz';
        }

        function andar(){
            return 'Este anda com as 2 pernas';

        }
    }

    class baleia implements Mamifero, Terrestre{
        public function respirar(){
            return 'Ela respira pelo Nariz';
        }

        public function andar(){
            return 'Ela nao anda, apenas nada';
        }
    }

?>