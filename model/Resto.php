<?php

    require_once("Calculadora.php");
    class Resto extends Calculadora {

        public function calcular(){
            return $this->numA % $this->numB;
        }

    }