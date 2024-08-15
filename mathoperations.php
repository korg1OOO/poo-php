<?php
    class Calculadora {
        private $numA;
        private $numB;

        public function getNumA()
        {
                return $this->numA;
        }

        public function setNumA($numA): self
        {
                $this->numA = $numA;

                return $this;
        }

        public function getNumB()
        {
                return $this->numB;
        }

        public function setNumB($numB): self
        {
                $this->numB = $numB;

                return $this;
        }

        public function soma()
        {
            return $this->numA + $this->numB;
        }

        public function subtracao()
        {
            return $this->numA - $this->numB;
        }

        public function multiplicacao()
        {
            return $this->numA * $this->numB;
        }

        public function divisao()
        {
            if ($this->numB != 0) {
                return $this->numA / $this->numB;
            } else {
                return 'Erro: Divisão por zero';
            }
        }

        public function resto()
        {
            if ($this->numB != 0) {
                return $this->numA % $this->numB;
            } else {
                return 'Erro: Divisão por zero';
            }
        }
    }

    $calculadora = new Calculadora();
    $calculadora->setNumA(readline("Escolha o número A: \n"));
    $calculadora->setNumB(readline("Escolha o número B: \n"));

    echo "Soma: " . $calculadora->soma() . "\n";
    echo "Subtração: " . $calculadora->subtracao() . "\n";
    echo "Multiplicação: " . $calculadora->multiplicacao() . "\n";
    echo "Divisão: " . $calculadora->divisao() . "\n";
    echo "Resto: " . $calculadora->resto() . "\n";
