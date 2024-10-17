<?php

require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica {

    private $lado;

    public function getArea(){
        $area = $this->lado * $this->lado;
        echo "A área do quadrado é de $area u.a.\n";
    }

    public function getDesenho(){
        echo "
        000000000000
        0          0
        0          0
        0          0
        0          0
        0          0
        0          0
        000000000000\n";
    }
    
    /**
     * Get the value of lado
     */
    public function getLado()
    {
        return $this->lado;
    }

    /**
     * Set the value of lado
     */
    public function setLado($lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}