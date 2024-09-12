<?php
    class Carta {
        private int $numero;
        private string $nome;

        public function __construct($nome, $numero){
            $this->nome = $nome;
            $this->numero = $numero;
        }

        public function __toString()
        {
            $this->numero . " de " . $this->nome;
        }

    }

    $cartas = [];

    $naipes = ["Copas", "Espadas", "Ouros", "Paus"];
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

    foreach($naipes as $i =>$nai){
        foreach($numeros as $i =>$num){
            $carta = new Carta($nai, $num);
            $cartas[] = $carta;
        }
    }

    $carta_escolhida = array_rand($cartas, 1);

    foreach($cartas as $i =>$c){
        
    }
