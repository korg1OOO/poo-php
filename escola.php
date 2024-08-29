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

        public function __toString()
        {
            return "Nome: " . $this->nome . " | Endereço: " . $this->endereco . " | Quantidade de Alunos: " . $this->qtd_alunos . "\n";
        }
    }

    $escolas = [];

    for ($i = 1; $i <= 4; $i++) {
        $escola = new Escola();
        $escola->setNome(readline("Digite o nome da escola $i: "))
            ->setEndereco(readline("Digite o endereço da escola $i: "))
            ->setQtdAlunos(readline("Digite a quantidade de alunos da escola $i: "));
        $escolas[] = $escola;
    }

    foreach ($escolas as $index => $escola) {
        echo "Dados da Escola " . ($index + 1) . ":\n";
        echo $escola;
    }

    $escolaComMaisAlunos = $escolas[0];
    foreach ($escolas as $escola) {
        if($escola->getQtdAlunos() > $escolaComMaisAlunos->getQtdAlunos()){
            $escolaComMaisAlunos = $escola;
        }
    }
    echo "Escola com mais alunos: " . $escolaComMaisAlunos;
