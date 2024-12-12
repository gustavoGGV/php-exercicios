<?php

require_once("Veiculo.php");

class Carro extends Veiculo {

    public function valor() {

        return $this->aluguel+(1.50*$this->kmsRodados);

    }

}