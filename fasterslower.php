<?php
    class Veiculo {
        private $modelo;
        private $marca;
        private $anoFabricacao;
        private $velocidadeMax;

        public function getModelo()
        {
                return $this->modelo;
        }

        public function setModelo($modelo): self
        {
                $this->modelo = $modelo;

                return $this;
        }

        public function getMarca()
        {
                return $this->marca;
        }

        public function setMarca($marca): self
        {
                $this->marca = $marca;

                return $this;
        }

        public function getAnoFabricacao()
        {
                return $this->anoFabricacao;
        }

        public function setAnoFabricacao($anoFabricacao): self
        {
                $this->anoFabricacao = $anoFabricacao;

                return $this;
        }

        public function getVelocidadeMax()
        {
                return $this->velocidadeMax;
        }

        public function setVelocidadeMax($velocidadeMax): self
        {
                $this->velocidadeMax = $velocidadeMax;

                return $this;
        }


    }

$carro1 = new Veiculo();
$carro1->setModelo(readline("Digite o modelo do carro: "))
        ->setMarca(readline("Digite a marca do carro: "))
        ->setAnoFabricacao(readline("Digite o ano de fabricação do carro: "))
        ->setVelocidadeMax(readline("Digite a velocidade máxima do carro: "));

$carro2 = new Veiculo();
$carro2 ->setModelo(readline("Digite o modelo do carro: "))
        ->setMarca(readline("Digite a marca do carro: "))
        ->setAnoFabricacao(readline("Digite o ano de fabricação do carro: "))
        ->setVelocidadeMax(readline("Digite a velocidade máxima do carro: "));

$carro3 = new Veiculo();
$carro3 ->setModelo(readline("Digite o modelo do carro: "))
        ->setMarca(readline("Digite a marca do carro: "))
        ->setAnoFabricacao(readline("Digite o ano de fabricação do carro: "))
        ->setVelocidadeMax(readline("Digite a velocidade máxima do carro: "));

$carros = [$carro1, $carro2, $carro3];

$carroMaisRapido = $carros[0];
$carroMaisLento = $carros[0];

foreach ($carros as $carro) {
    if ($carro->getVelocidadeMax() > $carroMaisRapido->getVelocidadeMax()) {
        $carroMaisRapido = $carro;
    }

    if ($carro->getVelocidadeMax() < $carroMaisLento->getVelocidadeMax()) {
        $carroMaisLento = $carro;
    }
}

echo "O carro mais rápido é: " . $carroMaisRapido->getModelo() . "-" . $carroMaisRapido->getMarca() . ", fabricado em " . $carroMaisRapido->getAnoFabricacao() . ", com velocidade máxima de " . $carroMaisRapido->getVelocidadeMax() . "km/h.\n\n";

echo "O carro mais lento é: " . $carroMaisLento->getModelo() . "-" . $carroMaisLento->getMarca() . ", fabricado em " . $carroMaisLento->getAnoFabricacao() . ", com velocidade máxima de " . $carroMaisLento->getVelocidadeMax() . "km/h.\n";
