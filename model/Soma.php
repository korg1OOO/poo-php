<?php

    require_once("Calculadora.php");

    class Soma extends Calculadora {

        public function calcular(){
            return $this->numA + $this->numB;
        }

    }