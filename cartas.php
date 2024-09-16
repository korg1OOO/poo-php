<?php
    class Carta {
        private int $numero;
        private string $nome;

        /**
         * Get the value of numero
         */
        public function getNumero(): int
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         */
        public function setNumero(int $numero): self
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        public function __construct($nome, $numero){
            $this->nome = $nome;
            $this->numero = $numero;
        }

        public function __toString()
        {
            return $this->numero . " " . $this->nome . " - ";
        }

    }

    $naipes = ["Copas", "Espadas", "Ouros", "Paus"];
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

    $cartas = [];
    foreach($naipes as $nai){
        foreach($numeros as $num){
            $carta = new Carta($nai, $num);
            $cartas[] = $carta;
        }
    }

    $carta_escolhida = $cartas[array_rand($cartas)];

    $chutes = [];
    $palpite = "";
    $pontuacao = 0;

    foreach($cartas as $carta){
        echo $carta;
    }
    echo "\n";

    do {
        echo "-----------JOGO-----------\n";
        echo "1- Dar palpite\n";
        echo "2- Ver chutes realizados\n";
        echo "3- Pedir dica\n";
        echo "4- Ver pontos\n";
        echo "0- DESISTIR\n";
        $opcao = readline("Escolha a opção: \n");

    switch($opcao) {
        case 0:
            echo "Programa encerrado!\n";
        break;

        case 1:
            $palpite = readline("Dê um palpite (ex: 1 Copas): \n");
            //ÚNICA MANEIRA QUE ACHEI DE SEPARAR A STRING EM 2 PARTES DE UM ARRAY FOI USANDO A FUNÇÃO EXPLODE, QUE VAI ATUAR DIVIDINDO A STRING $palpite EM UM ARRAY COM 2 OBJETOS
            $array_palpite = explode(" ", $palpite);
            if (count($array_palpite) != 2) {
                echo "Formato de palpite inválido! Use o formato 'Número Naipe'.\n";
                break;
            } 
            
            $palpiteNum = $array_palpite[0];
            $palpiteNai = $array_palpite[1];

            $carta_palpite = new Carta($palpiteNai, $palpiteNum);

            if ($carta_palpite->getNumero() == $carta_escolhida->getNumero() && $carta_palpite->getNome() == $carta_escolhida->getNome()) {
                echo "Parabéns você acertou!\n";
                $pontuacao += 10;
                $carta_escolhida = $cartas[array_rand($cartas)];
                $chutes = [];
            } else {
                echo "Que pena você errou!\n";
                $chutes[] = $palpite;
            }
        break;

        case 2:
            echo "LISTANDO TENTATIVAS...\n";
            foreach($chutes as $chute){
                echo $chute . " - ";
            }
            echo "\n";
        break;

        case 3:
            echo "Dica: \n";
            do {
                echo "-----------JOGO-----------\n";
                echo "1- Pedir dica de número\n";
                echo "2- Pedir dica de naipe\n";
                echo "0- Voltar ao menu principal\n";
                $opcao_dica = readline("Escolha a opção: \n");

                switch($opcao_dica) {
                    case 0:
                        echo "Saindo\n";
                    break;

                    case 1:
                        if($carta_escolhida->getNumero() <= 6){
                            echo "A carta escolhida é menor ou igual a 6.\n";
                        } else {
                            echo "A carta escolhida é maior que 6.\n";
                        }
                    break;

                    case 2:
                        echo "A carta escolhida é de " . $carta_escolhida->getNome() . ".\n";
                    break;

                    default:
                    echo "Escolha uma das opções do menu!\n";
                }
            }
            while($opcao_dica != 0);
            
        break;

        case 4:
            echo "CALCULANDO PONTOS...\n";
            echo "Pontuação: $pontuacao\n";
        break;

        default:
        echo "Escolha uma das opções do menu!\n";
        }

    }
    while($opcao != 0);
