<?php

    require_once("Calculadora.php");
    class Multiplicacao extends Calculadora {

        public function calcular() {
            return $this->numA * $this->numB;
        }

    }