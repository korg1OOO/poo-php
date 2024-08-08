<?php 
    class Aluno {
        private $nome;
        private $nota1;
        private $nota2;

        public function getMedia() {
            return "Média do " . $this->nome . ": " . ($this->nota1 + $this->nota2) / 2 . "\n";
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

        public function getNota1()
        {
                return $this->nota1;
        }

        public function setNota1($nota1): self
        {
                $this->nota1 = $nota1;

                return $this;
        }

        public function getNota2()
        {
                return $this->nota2;
        }

        public function setNota2($nota2): self
        {
                $this->nota2 = $nota2;

                return $this;
        }
    }

    $aluno1 = new Aluno;
    $aluno1->setNome("Enzo")
           ->setNota1(80)
           ->setNota2(80);
    echo $aluno1->getMedia();

    $aluno2 = new Aluno;
    $aluno2->setNome("João")
           ->setNota1(100)
           ->setNota2(75);
    echo $aluno2->getMedia();

    $aluno3 = new Aluno;
    $aluno3->setNome("Samuel")
           ->setNota1(95)
           ->setNota2(35);
    echo $aluno3->getMedia();
