<?php

require_once("Produto.php");

class Livro extends Produto {

    private string $autor;

    public function getDados() {

        return "\n" . $this->descricao . "\n" . $this->unidadeMedida . "\n" . $this->autor . "\n";

    }

    /**
     * Get the value of autor
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor(string $autor): self
    {
        $this->autor = $autor;

        return $this;
    }

}
