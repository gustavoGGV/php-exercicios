<?php

require_once("Funcionario.php");

class Desenvolvedor extends Funcionario{
    public function getCargo(){
        $cargo="desenvolvedor";
        return $cargo;
    }

    public function valorSalario(){
        return 1500*2.3;
    }
}
