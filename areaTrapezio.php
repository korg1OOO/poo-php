<?php
    class Trapezio {
        private $baseMaior;
        private $baseMenor;
        private $altura;

        /**
         * Get the value of baseMaior
         */
        public function getBaseMaior()
        {
                return $this->baseMaior;
        }

        /**
         * Set the value of baseMaior
         */
        public function setBaseMaior($baseMaior): self
        {
                $this->baseMaior = $baseMaior;

                return $this;
        }

        /**
         * Get the value of baseMenor
         */
        public function getBaseMenor()
        {
                return $this->baseMenor;
        }

        /**
         * Set the value of baseMenor
         */
        public function setBaseMenor($baseMenor): self
        {
                $this->baseMenor = $baseMenor;

                return $this;
        }

        /**
         * Get the value of altura
         */
        public function getAltura()
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         */
        public function setAltura($altura): self
        {
                $this->altura = $altura;

                return $this;
        }

        public function __toString()
        {
            return "Base Maior: " . $this->baseMaior . "\nBase Menor: " . $this->baseMenor . "\nAltura: " . $this->altura . "\n";
        }

        public function getArea() {
            return (($this->baseMaior + $this->baseMenor) * $this->altura) / 2;
        }
    }
    $trapezios = [];

    for ($i = 1; $i <= 4; $i++) {
        $trapezio = new Trapezio();
        $trapezio->setBaseMaior(readline("Digite a base maior do trapézio $i: "))
            ->setBaseMenor(readline("Digite a base menor do trapézio $i: "))
            ->setAltura(readline("Digite a altura do trapézio $i: "));
        $trapezios[] = $trapezio;
    }

    $maiorAreaTrapezio = $trapezios[0];
    foreach ($trapezios as $trapezio) {
        if($trapezio->getArea() > $maiorAreaTrapezio->getArea()){
            $maiorAreaTrapezio = $trapezio;
        }
    }
    echo "O trapézio com maior área tem as dimensões: \n" . $maiorAreaTrapezio;
