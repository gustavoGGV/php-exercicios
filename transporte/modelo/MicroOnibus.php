<?php

require_once("Veiculo.php");

class MicroOnibus extends Veiculo {

    public function valor() {

        return $this->aluguel+(2.75*$this->kmsRodados);

    }

}