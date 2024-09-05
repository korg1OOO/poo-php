<?php
    class Prato {
        private string $descricao;
        private int $quantidade;
        private float $valorUnitario;

        /**
         * Get the value of descricao
         */
        public function getDescricao(): string
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         */
        public function setDescricao(string $descricao): self
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of quantidade
         */
        public function getQuantidade(): int
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         */
        public function setQuantidade(int $quantidade): self
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        /**
         * Get the value of valorUnitario
         */
        public function getValorUnitario(): float
        {
                return $this->valorUnitario;
        }

        /**
         * Set the value of valorUnitario
         */
        public function setValorUnitario(float $valorUnitario): self
        {
                $this->valorUnitario = $valorUnitario;

                return $this;
        }

        public function __toString()
        {
            return "Descrição: " . $this->descricao . " " . $this->quantidade . " unidades, cada uma por " . $this->valorUnitario . "R$. \n";
        }

        public function getValorTotal(){
            return $this->quantidade * $this->valorUnitario;
        }
    }

    $pratos = [];
    $valorTotal = 00.00;
    
    for ($i = 1; $i <= 3; $i++) {
        $prato = new Prato();
        $prato->setDescricao(readline("Digite a descrição do prato $i: "))
            ->setQuantidade(readline("Digite a quantidade de unidades do prato $i: "))
            ->setValorUnitario(readline("Digite o valor unitário do prato $i: "));
        $pratos[] = $prato;
    }

    foreach ($pratos as $idx => $prato) {
        echo "Dados do prato " . ($idx + 1) . ": \n";
        echo $prato;
        $valorTotal = $prato->getValorTotal() + $valorTotal;
    }

    echo "O valor total da janta foi de: " . $valorTotal . "R$\n";
