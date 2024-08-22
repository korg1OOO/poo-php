<?php 
    class Escola {
        private $nome;
        private $endereco;
        private $qtd_alunos;

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

        public function getQtdAlunos()
        {
                return $this->qtd_alunos;
        }

        public function setQtdAlunos($qtd_alunos): self
        {
                $this->qtd_alunos = $qtd_alunos;

                return $this;
        }
    }

    $escola1 = new Escola();
    $escola1->setNome(readline("Digite o nome da escola 1: "))
            ->setEndereco(readline("Digite o endereço da escola 1: "))
            ->setQtdAlunos(readline("Digite a quantidade de alunos da escola 1: "));

    $escola2 = new Escola();
    $escola2->setNome(readline("Digite o nome da escola 2: "))
            ->setEndereco(readline("Digite o endereço da escola 2: "))
            ->setQtdAlunos(readline("Digite a quantidade de alunos da escola 2: "));

    $escola3 = new Escola();
    $escola3->setNome(readline("Digite o nome da escola 3: "))
            ->setEndereco(readline("Digite o endereço da escola 3: "))
            ->setQtdAlunos(readline("Digite a quantidade de alunos da escola 3: "));

    $escola4 = new Escola();
    $escola4->setNome(readline("Digite o nome da escola 4: "))
            ->setEndereco(readline("Digite o endereço da escola 4: "))
            ->setQtdAlunos(readline("Digite a quantidade de alunos da escola 4: "));

    $escolas = [$escola1, $escola2, $escola3, $escola4];

    
