<?php

require_once("Veiculo.php");

class Van extends Veiculo {

    public function valor() {

        return $this->aluguel+(2.10*$this->kmsRodados);

    }

}