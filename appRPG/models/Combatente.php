<?php
    require_once("Mago.php");

    class Combatente extends Mago {
        private int $forcaDeAtaque;

        /**
         * Get the value of forcaDeAtaque
         */
        public function getForcaDeAtaque(): int
        {
                return $this->forcaDeAtaque;
        }

        /**
         * Set the value of forcaDeAtaque
         */
        public function setForcaDeAtaque(int $forcaDeAtaque): self
        {
                $this->forcaDeAtaque = $forcaDeAtaque;

                return $this;
        }

        public function lancarPoder(){
            $poder = $this->getPoder();
            $forcaTotal = $poder->getForcaTotal($this->forcaDeAtaque);
            return "O mago $this->nome, do tipo Combatente, possui força de $this->forcaDeAtaque e lançou o poder {$poder->getDescricao()} com força total de $forcaTotal.";
        }
    }