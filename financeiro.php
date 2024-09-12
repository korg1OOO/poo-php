<?php
    class Receita {
        private string $descricaoReceita;
        private float $valorReceita;

        /**
         * Get the value of descricaoReceita
         */
        public function getDescricaoReceita(): string
        {
                return $this->descricaoReceita;
        }

        /**
         * Set the value of descricaoReceita
         */
        public function setDescricaoReceita(string $descricaoReceita): self
        {
                $this->descricaoReceita = $descricaoReceita;

                return $this;
        }

        /**
         * Get the value of valorReceita
         */
        public function getValorReceita(): float
        {
                return $this->valorReceita;
        }

        /**
         * Set the value of valorReceita
         */
        public function setValorReceita(float $valorReceita): self
        {
                $this->valorReceita = $valorReceita;

                return $this;
        }

        public function __toString()
        {
            return $this->descricaoReceita . " " . $this->valorReceita . "R$\n";
        }
    }

    class Despesa {
        private string $descricaoDespesa;
        private float $valorDespesa;
        
        /**
         * Get the value of descricaoDespesa
         */
        public function getDescricaoDespesa(): string
        {
                return $this->descricaoDespesa;
        }

        /**
         * Set the value of descricaoDespesa
         */
        public function setDescricaoDespesa(string $descricaoDespesa): self
        {
                $this->descricaoDespesa = $descricaoDespesa;

                return $this;
        }

        /**
         * Get the value of valorDespesa
         */
        public function getValorDespesa(): float
        {
                return $this->valorDespesa;
        }

        /**
         * Set the value of valorDespesa
         */
        public function setValorDespesa(float $valorDespesa): self
        {
                $this->valorDespesa = $valorDespesa;

                return $this;
        }

        public function __toString()
        {
            return $this->descricaoDespesa . " " . $this->valorDespesa . "R$\n";
        }
    }

    $receitas = [];
    $despesas = [];

    do {
        echo "-----------MENU-----------\n";
        echo "1- Adicionar Receita\n";
        echo "2- Adicionar Despesa\n";
        echo "3- Listar Receitas\n";
        echo "4- Listar Despesas\n";
        echo "5- Sumarizar\n";
        echo "0- SAIR\n";
        $opcao = readline("Escolha a opção: \n");

    switch($opcao) {
        case 0:
            echo "Programa encerrado!\n";
        break;

        case 1:
            echo "Adicionar Receita\n";
            $receita = new Receita();
            $receita->setValorReceita(readline("Digite o valor da receita: "))
                    ->setDescricaoReceita(readline("Digite a descrição da receita: "));

            $receitas[] = $receita;

            echo "Receita cadastrada com sucesso!\n";
        break;

        case 2:
            echo "Adicionar Despesa\n";
            $despesa = new Despesa();
            $despesa->setValorDespesa(readline("Digite o valor da despesa: "))
                    ->setDescricaoDespesa(readline("Digite a descrição da despesa: "));

            $despesas[] = $despesa;

            echo "Despesa cadastrada com sucesso!\n";
        break;

        case 3:
            echo "Listando Receitas\n";
            $i = 1;

            foreach($receitas as $i => $r) {
                echo $i+1 . ": " . $r;
                $i++;
            }

        break;

        case 4:
            echo "Listando Despesas\n";
            $i = 1;

            foreach($despesas as $i => $d) {
                echo $i+1 . ": " . $d;
                $i++;
            }

        break;

        case 5:
            $i = 1;
            $saldo = 0;
            $totalReceitas = 0;
            $totalDespesas = 0;

            foreach($receitas as $i => $r) {
                $totalReceitas = $totalReceitas + $r->getValorReceita();
                $i++;
            }

            foreach($despesas as $i => $d) {
                $totalDespesas = $totalDespesas + $d->getValorDespesa();
                $i++;
            }

            $saldo = $totalReceitas - $totalDespesas;

            echo "Saldo: $saldo\n";
            echo "Total de receitas: $totalReceitas\n";
            echo "Total de despesas: $totalDespesas\n";

        break;
        
        default:
        echo "Opção INVÁLIDA!\n";
        }

    }

    while($opcao != 0);
