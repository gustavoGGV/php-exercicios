<?php

abstract class Funcionario {
    protected string $nome;

    abstract function getCargo();

    abstract function valorSalario();

    public function __toString(){
        return "\nO funcionário " . $this->nome . ", cargo " . $this->getCargo() . ", possui salário de R$" . number_format($this->valorSalario(), 2, ",", ".") . ".\n";
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}
