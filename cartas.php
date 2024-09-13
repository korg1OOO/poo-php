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
            return $this->numero . " de " . $this->nome;
        }

    }

    $cartas = [];
    $palpite = "";
    $pontuacao = 0;

    $naipes = ["Copas", "Espadas", "Ouros", "Paus"];
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

    foreach($naipes as $i =>$nai){
        foreach($numeros as $i =>$num){
            $carta = new Carta($nai, $num);
            $cartas[] = $carta;
        }
    }

    $carta_escolhida = array_rand($cartas);
    print($carta_escolhida);
    foreach($cartas as $carta){
        echo $carta . " - ";
    }

    do {
        echo "-----------JOGO-----------\n";
        echo "1- Dar palpite\n";
        echo "2- Ver chutes restantes\n";
        echo "3- Pedir dica\n";
        echo "4- Ver pontos\n";
        echo "0- DESISTIR\n";
        $opcao = readline("Escolha a opção: \n");

    switch($opcao) {
        case 0:
            echo "Programa encerrado!\n";
        break;

        case 1:
            $palpite = readline("Dê um palpite: \n");

            if($palpite == $carta_escolhida){
                echo "Parabéns você acertou!\n";
                $pontuacao += 10;
            } else {
                echo "Que pena você errou!\n";
            }
        break;

        case 2:
            echo "Dica: \n";
            //FALTA FAZER
        break;

        case 3:
            echo "LISTANDO CARTAS RESTANTES...\n";
            //FALTA FAZER
        break;

        case 4:
            echo "CALCULANDO PONTOS...\n";
            echo "Pontuação: $pontuacao\n";
        break;

        default:
        echo "Opção INVÁLIDA!\n";
        }

    }

    while($opcao != 0);){
    }
