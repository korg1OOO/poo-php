<?php
    class Cidade {
        private $populacao;
        private $nome;
        private $area;

        public function getPopulacao()
        {
                return $this->populacao;
        }

        public function setPopulacao($populacao): self
        {
                $this->populacao = $populacao;

                return $this;
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

        public function getArea()
        {
                return $this->area;
        }

        public function setArea($area): self
        {
                $this->area = $area;

                return $this;
        }

        public function aumentarPopulacao() {

        }

        public function mudarNome() {

        }

        public function mudarArea() {

        }
    }
