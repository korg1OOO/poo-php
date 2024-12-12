<?php

    require_once("Calculadora.php");
    class Divisao extends Calculadora {

        public function calcular() {
            return $this->numA / $this->numB;
        }

    }