<?php

abstract class Veiculo {

    protected float $kmsRodados;
    protected float $aluguel;
    protected string $tipo;

    public function __toString() {

        return printf("\nO veículo do tipo %s foi alugado por R$%.2f, rodou %.2f quilômetros com custo total de R$%.2f\n\n", $this->tipo, $this->aluguel, $this->kmsRodados, $this->valor());

    }

    abstract function valor();

    /**
     * Get the value of kmsRodados
     */
    public function getKmsRodados(): float
    {
        return $this->kmsRodados;
    }

    /**
     * Set the value of kmsRodados
     */
    public function setKmsRodados(float $kmsRodados): self
    {
        $this->kmsRodados = $kmsRodados;

        return $this;
    }

    /**
     * Get the value of aluguel
     */
    public function getAluguel(): float
    {
        return $this->aluguel;
    }

    /**
     * Set the value of aluguel
     */
    public function setAluguel(float $aluguel): self
    {
        $this->aluguel = $aluguel;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

}
