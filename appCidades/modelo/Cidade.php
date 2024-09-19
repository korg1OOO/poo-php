<?php

    class Cidade {

        private string $nome;
        private int $qtdHabitantes;
        private float $altitude;
        private Estado $estado;

        

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of qtdHabitantes
         */
        public function getQtdHabitantes(): int
        {
                return $this->qtdHabitantes;
        }

        /**
         * Set the value of qtdHabitantes
         */
        public function setQtdHabitantes(int $qtdHabitantes): self
        {
                $this->qtdHabitantes = $qtdHabitantes;

                return $this;
        }

        /**
         * Get the value of altitude
         */
        public function getAltitude(): float
        {
                return $this->altitude;
        }

        /**
         * Set the value of altitude
         */
        public function setAltitude(float $altitude): self
        {
                $this->altitude = $altitude;

                return $this;
        }

        /**
         * Get the value of estado
         */
        public function getEstado(): Estado
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         */
        public function setEstado(Estado $estado): self
        {
                $this->estado = $estado;

                return $this;
        }

        public function __toString() {
            return "A cidade de " . $this->nome . " localizada no estado " . $this->estado->getNome() . "-" . $this->estado->getSigla() . ", possui " . $this->qtdHabitantes . " habitantes e uma altitude de " . $this->altitude . " metros.\n";
        }
    }