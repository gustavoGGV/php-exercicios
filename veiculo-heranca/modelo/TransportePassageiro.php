<?php

require_once("Veiculo.php");

class TransportePassageiro extends Veiculo {

    protected $qtdPassageiros;

    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros()
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros($qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }
    
}
