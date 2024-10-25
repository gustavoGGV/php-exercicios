<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia {

    private int $consumo;

    public function getValorFatura(){

        if($this->consumo<=100){

            $fatura=1.45*$this->consumo;

        } else{

            $fatura=1.65*$this->consumo;

        }

        return $fatura;

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
     *
     * @return  self
     */ 
    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;

        return $this;
    }

}
