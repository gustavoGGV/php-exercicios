<?php

require_once("Veiculo.php");

class Caminhao extends Veiculo {

    private $qtdCarga;
    private $altura; 

    public function getDados() {

        return "\nModelo: " . $this->modelo . "\nCor: " . $this->cor . "\nVelocidade máxima: " . $this->velocidadeMax . "\nQuantidade de peso da carga: " . $this->qtdCarga . "t\nAltura: " . $this->altura . "m\n";

    }

    /**
     * Get the value of qtdCarga
     */
    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

    /**
     * Set the value of qtdCarga
     */
    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

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
