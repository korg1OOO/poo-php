<?php 
    class Pessoa {
        private $nome;
        private $endereco;
        private $cidade;
        private $UF;
        private $altura;

        public function getApresentacao() {
            return "Olá mundo, sou " . $this->nome . ", resido no endereço " . $this->endereco . ", " . $this->cidade . "-" . $this->UF . " e possuo uma altura de " . $this->altura . "!\n";
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        public function getEndereco()
        {
                return $this->endereco;
        }

        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
        }

        public function getCidade()
        {
                return $this->cidade;
        }

        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

        public function getUF()
        {
                return $this->UF;
        }

        public function setUF($UF): self
        {
                $this->UF = $UF;

                return $this;
        }

        public function getAltura()
        {
                return $this->altura;
        }

        public function setAltura($altura): self
        {
                $this->altura = $altura;

                return $this;
        }
    }

    $pessoa1 = new Pessoa;
    $pessoa1->setNome("Enzo")
           ->setEndereco("Rua Franca 238")
           ->setCidade("Foz do Iguaçu")
           ->setUF("PR")
           ->setAltura("1.76");
    echo $pessoa1->getApresentacao();

    $pessoa2 = new Pessoa;
    $pessoa2->setNome("João")
        ->setEndereco("Rua Loanda 177")
        ->setCidade("Foz do Iguaçu")
        ->setUF("PR")
        ->setAltura("1.70");
    echo $pessoa2->getApresentacao();
