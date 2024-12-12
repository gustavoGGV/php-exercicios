<?php

require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");
require_once("modelo/Divisao.php");
require_once("modelo/Multiplicacao.php");
require_once("modelo/Resto.php");

do {

    do {

        $operacao=readline("Que operação você deseja fazer? (1-Soma, 2-Subtração, 3-Divisão, 4-Multiplicação, 5-Resto): ");
    
        if($operacao==1) {
    
            $conta=new Soma();
    
        } else if($operacao==2) {
    
            $conta=new Subtracao();
    
        } else if($operacao==3) {
    
            $conta=new Divisao();
    
        } else if($operacao==4) {
    
            $conta=new Multiplicacao();
    
        } else if($operacao==5) {
    
            $conta=new Resto();
    
        } else {
    
            echo "\nEntrada inválida!\n";
    
        }
    
    } while($operacao!=1 && $operacao!=2 && $operacao!=3 && $operacao!=4 && $operacao!=5);

    $conta->setNumA(readline("1° número: "));
    $conta->setNumB(readline("2° número: "));

    if($conta->getNumA()!=0 && $conta->getNumB()!=0) {

        echo "\nResultado: " . $conta->calcular() . ".\n\n";
        $x=1;

    } else {

        $x=0;

    }

} while($x!=0);
