<?php

require_once("TransportePassageiro.php");

class CarroPasseio extends TransportePassageiro {

    public function getDados() {

        return "\nModelo: " . $this->modelo . "\nCor: " . $this->cor . "\nVelocidade máxima: " . $this->velocidadeMax . "Km/h\nQuantidade de passageiros: " . $this->qtdPassageiros . "\n";

    }

}
