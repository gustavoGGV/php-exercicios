<?php

require_once("modelo/Comercial.php");
require_once("modelo/Residencial.php");
require_once("modelo/Industrial.php");

$i=1;
do {

    echo "1 - Calcular fatura residencial\n";
    echo "2 - Calcular fatura comercial\n";
    echo "3 - Calcular fatura industrial\n";
    echo "0 - Sair\n";
    $i=readline("Escolha uma opção: ");

    if($i==1){

        $fatura=new Residencial();
        $fatura->setConsumo(readline("O quando de energia você consumiu (em KWh)?: "));
        printf("\nSua fatura custa R$%.2f!\n\n", $fatura->getValorFatura());

    } else if($i==2){

        $fatura=new Comercial();
        $fatura->setConsumo(readline("O quando de energia você consumiu (em KWh)?: "));
        printf("\nSua fatura custa R$%.2f!\n\n", $fatura->getValorFatura());

    } else if($i==3){

        $fatura=new Industrial();
        $fatura->setConsumo(readline("O quando de energia você consumiu (em KWh)?: "));
        printf("\nSua fatura custa R$%.2f!\n\n", $fatura->getValorFatura());

    } else if($i==0){

        echo "\nVocê saiu!\n\n";
        break;

    } else{

        echo "\nOpção inválida!\n\n";

    }

} while($i!=0);
