<?php

require_once("Espaco.php");

class Restaurante extends Espaco {

    private string $tipoComida;

    public function getDadosRestaurante() {

        return "\nNome do restaurante: " . $this->nome . "\nEndereço do restaurante: " . $this->endereco . "\nTipo de comida do restaurante: " . $this->tipoComida;

    }

    /**
     * Get the value of tipoComida
     */
    public function getTipoComida(): string
    {
        return $this->tipoComida;
    }

    /**
     * Set the value of tipoComida
     */
    public function setTipoComida(string $tipoComida): self
    {
        $this->tipoComida = $tipoComida;

        return $this;
    }

}
