<?php

    require_once("Calculadora.php");

    class Subtracao extends Calculadora {

        public function calcular(){
            return $this->numA - $this->numB;
        }
        
    }