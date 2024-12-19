<?php

require_once("Funcionario.php");

class Gerente extends Funcionario{
    public function getCargo(){
        $cargo="gerente";
        return $cargo;
    }

    public function valorSalario(){
        return 1500*4.5;
    }
}
