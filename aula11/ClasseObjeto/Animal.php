<?php 
    class Animal{
        public $nome;

        public function som(){
            return "O animal faz um som.";
        }
    }

    class Cachorro extends Animal {
        public function som(){
            return "O cachorro late.";
        }
    }

    $animal = new Animal("Animal");

    $cachorro = new Cachorro("Rex");

    echo $animal->som();

    echo $cachorro->som();
?>