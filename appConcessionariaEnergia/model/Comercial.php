<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia {
    
    private $consumo;

    public function getValorFatura()
    {
        if($this->consumo <= 100)
            $valorFatura = $this->consumo * 1.45;
        else {
            $this->consumo -= 100;
            $valorFatura = $this->consumo * 1.60 + 145;
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