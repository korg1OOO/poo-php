<?php

require_once("IFormaGeometrica.php");

class Retangulo implements IFormaGeometrica {

    private $base;
    private $altura;

    public function getArea(){
        $area = $this->base * $this->altura;
        echo "A área do retângulo é $area u.a.";
    }

    public function getDesenho(){
        echo "
        0000000000000000000
        0                 0
        0                 0
        0                 0
        0                 0
        0000000000000000000\n
        ";
    }

    /**
     * Get the value of base
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of base
     */
    public function setBase($base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}