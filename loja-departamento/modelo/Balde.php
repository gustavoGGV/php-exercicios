<?php

require_once("Produto.php");

class Balde extends Produto {

    private int $capacidade;

    public function getDados() {

        return "\n" . $this->descricao . "\n" . $this->unidadeMedida . "\n" . $this->capacidade . "\n";

    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade(): int
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade(int $capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

}
