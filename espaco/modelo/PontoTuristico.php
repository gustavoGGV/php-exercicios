<?php

require_once("Espaco.php");

class PontoTuristico extends Espaco {

    private int $duracaoDaVisita;

    public function getDadosPontoTuristico() {

        return "\nNome do ponto turístico: " . $this->nome . "\nEndereço do ponto turístico: " . $this->endereco . "\nDuração da visita: " . $this->duracaoDaVisita . " dias";

    }

    /**
     * Get the value of duracaoDaVisita
     */
    public function getDuracaoDaVisita(): int
    {
        return $this->duracaoDaVisita;
    }

    /**
     * Set the value of duracaoDaVisita
     */
    public function setDuracaoDaVisita(int $duracaoDaVisita): self
    {
        $this->duracaoDaVisita = $duracaoDaVisita;

        return $this;
    }

}
