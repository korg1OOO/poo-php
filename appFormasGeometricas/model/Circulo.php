<?php

require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica {

    private $raio;
    
    public function getArea() {
        $area = 2 * 3.14 * $this->raio;
        echo "A área do seu círculo é de $area u.a.";
    }

    public function getDesenho() {
        echo "
          0000000000 
        00          00  
       0              0 
      0                0
      0                0
      0                0
      0                0
       0              0 
        00          00  
          0000000000 \n";

    }

    /**
     * Get the value of raio
     */
    public function getRaio()
    {
        return $this->raio;
    }

    /**
     * Set the value of raio
     */
    public function setRaio($raio): self
    {
        $this->raio = $raio;

        return $this;
    }

}