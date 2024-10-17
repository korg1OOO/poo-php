<?php

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia {
    
    private $consumo;

    public function getValorFatura()
    {
        if($this->consumo <= 500)
            $valorFatura = $this->consumo * 1.80;
        else {
            $this->consumo -= 500;
            $valorFatura = $this->consumo * 2.30 + 900;
        }
        echo "A fatura mensal ficou no valor de R$$valorFatura\n";
    }
    
    /**
     * Get the value of consumo
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * Set the value of consumo
     */
    public function setConsumo($consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
    
}