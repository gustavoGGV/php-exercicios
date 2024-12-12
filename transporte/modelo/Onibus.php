<?php

require_once("Veiculo.php");

class Onibus extends Veiculo {

    public function valor() {

        return $this->aluguel+(4.20*$this->kmsRodados);

    }

}