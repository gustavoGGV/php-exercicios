<?php

require_once("Mago.php");
require_once("Poder.php");

class Curandeiro extends Mago {

    private int $forcaDeCura;

    public function lancarPoder() {

        $poder=$this->getPoder();
        $forcaTotal=$poder->getForcaTotal($this->forcaDeCura);

        return "O mago " . $this->nome . " do tipo curandeiro, possui força de " . $this->forcaDeCura . " e lançou o poder '" . $poder->getDescricao() . "' com força total de " . $forcaTotal . ".\n";

    }

    /**
     * Get the value of forcaDeCura
     */
    public function getForcaDeCura(): int
    {
        return $this->forcaDeCura;
    }

    /**
     * Set the value of forcaDeCura
     */
    public function setForcaDeCura(int $forcaDeCura): self
    {
        $this->forcaDeCura = $forcaDeCura;

        return $this;
    }

}
