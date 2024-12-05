<?php

class Midia {

    protected string $descricao;
    protected float $precoPago;

    public function getDados() {

        return "\n" . $this->descricao . "\nR$" . $this->precoPago . "\n\n";

    }

    public function getTipo() {

        return "Mídia -";

    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of precoPago
     */
    public function getPrecoPago(): float
    {
        return $this->precoPago;
    }

    /**
     * Set the value of precoPago
     */
    public function setPrecoPago(float $precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }

}
