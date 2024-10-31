<?php

require_once("TransportePassageiro.php");

class Onibus extends TransportePassageiro {

    private $pesoMax;

    public function getDados() {

        return "\nModelo: " . $this->modelo . "\nCor: " . $this->cor . "\nVelocidade máxima: " . $this->velocidadeMax . "\nQuantidade de passageiros: " . $this->qtdPassageiros . "\nPeso máximo: " . $this->pesoMax . "t\n";

    }

    /**
     * Get the value of pesoMax
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }

}
