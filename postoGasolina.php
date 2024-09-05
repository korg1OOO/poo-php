<?php
    class Posto {
        private int $litrosGasolina;
        private array $abastecimentosGasolina = [];

        public function __construct()
        {
            $this->litrosGasolina = 0;
            $this->abastecimentosGasolina = [];
        }

        /**
         * Get the value of litrosGasolina
         */
        public function getLitrosGasolina(): int
        {
                return $this->litrosGasolina;
        }

        /**
         * Set the value of litrosGasolina
         */
        public function setLitrosGasolina(int $litrosGasolina): self
        {
                $this->litrosGasolina = $litrosGasolina;

                return $this;
        }

        /**
         * Get the value of abastecimentosGasolina
         */
        public function getAbastecimentosGasolina(): array
        {
                return $this->abastecimentosGasolina;
        }

        /**
         * Set the value of abastecimentosGasolina
         */
        public function setAbastecimentosGasolina(array $abastecimentosGasolina): self
        {
                $this->abastecimentosGasolina = $abastecimentosGasolina;

                return $this;
        }

        public function abastecer($litros){
            echo "Abastecendo...\n";
            if($this->litrosGasolina >= $litros){
                echo "Operação completa, carro abastecido!\n";
                $this->litrosGasolina -= $litros;
                $this->abastecimentosGasolina[] = $litros;
            } else 
                echo "Gasolina em falta!\n";

        }

        public function reporEstoque($adicionarLitros){
            $this->litrosGasolina = $this->litrosGasolina + $adicionarLitros;
            echo "Estoque de gasolina reposto! Agora o estoque conta com " . $this->litrosGasolina . "L de gasolina.\n";
        }
    }

    $betoAutoPosto = new Posto;
    
    do {
        echo "-----------MENU-----------\n";
        echo "1- Abastecer\n";
        echo "2- Repor Estoque\n";
        echo "3- Listar Abastecimentos\n";
        echo "0- SAIR\n";
        $opcao = readline("Escolha a opção: \n");

    switch($opcao) {
        case 0:
        echo "Programa encerrado!\n";
        break;

        case 1:
            $litros = readline("Quantos litros para abastecer: \n");
            $betoAutoPosto->abastecer($litros);
        break;

        case 2:
            $adicionarLitros = readline("Quantos litros você deseja adicionar ao estoque: ");
            $betoAutoPosto->reporEstoque($adicionarLitros);
        break;

        case 3:
            echo "Listando...\n";
            $abastecimentos = $betoAutoPosto->getAbastecimentosGasolina();
                foreach ($abastecimentos as $i => $abastecimento) {
                    echo "Abastecimento " . $i+1 . ": " . $abastecimento . " litros.\n";
                }

            break;
        
        default:
        echo "Opção INVÁLIDA!\n";
        }

    }

    while($opcao != 0);
