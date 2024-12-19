<?php

require_once("Funcionario.php");

class Estagiario extends Funcionario{
    public function getCargo(){
        $cargo="estagiário";
        return $cargo;
    }

    public function valorSalario(){
        return 1500*0.8;
    }
}
