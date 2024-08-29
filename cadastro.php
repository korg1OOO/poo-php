<?php
    class Pessoa {
        private $nome;
        private $sobrenome;
        private $idade;

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        public function getSobrenome()
        {
                return $this->sobrenome;
        }

        public function setSobrenome($sobrenome): self
        {
                $this->sobrenome = $sobrenome;

                return $this;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade): self
        {
                $this->idade = $idade;

                return $this;
        }

        public function __construct($nome = '', $sobrenome = '', $idade = 0) {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->idade = $idade;
        }

        public function __toString() {
            return sprintf("%s %s, %d anos\n",
                $this->nome, $this->sobrenome, $this->idade);
        }
    }

    $pessoas = [];
    $opcao = 0;

    do {
        echo "-----------MENU-----------\n";
        echo "1- Cadastrar\n";
        echo "2- Listar\n";
        echo "0- SAIR\n";
        $opcao = readline("Escolha a opção: \n");

    switch($opcao) {
        case 0:
        echo "Programa encerrado!\n";
        break;

        case 1:
        echo "Cadastro\n";
        $nome = readline("Digite o nome: ");
        $sobrenome = readline("Digite o sobrenome: ");
        $idade = readline("Digite a idade: ");

        $pessoa = new Pessoa($nome, $sobrenome, $idade);
        $pessoas[] = $pessoa;

        echo "Pessoa cadastrada com sucesso!\n";
        break;

        case 2:
        echo "Listando...\n\n";
        foreach ($pessoas as $pessoa) {
            echo $pessoa . "\n";
        }
        break;

        default:
        echo "Opção INVÁLIDA!\n";
        }

    }

    while($opcao != 0);
