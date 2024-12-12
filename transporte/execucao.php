<?php

require_once("modelo/Carro.php");
require_once("modelo/Van.php");
require_once("modelo/Onibus.php");
require_once("modelo/MicroOnibus.php");

$opcao = 0;
do {

    echo "\n-----------MENU-----------\n";
    echo "1- Carro\n";
    echo "2- Van\n";
    echo "3- Micro-ônibus\n";
    echo "4- Ônibus\n";
    echo "0- SAIR\n";

    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {

        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            $veiculo=new Carro();
            $veiculo->setTipo("carro");
            $veiculo->setAluguel(readline("Digite o valor do aluguel do veículo: "));
            $veiculo->setKmsRodados(readline("Digite a quantidade de quilômetros rodados pelo veículo: "));
            echo $veiculo; // por algum motivo retorna um número aleatório depois da string
            break;

        case 2:
            $veiculo=new Van();
            $veiculo->setTipo("van");
            $veiculo->setAluguel(readline("Digite o valor do aluguel do veículo: "));
            $veiculo->setKmsRodados(readline("Digite a quantidade de quilômetros rodados pelo veículo: "));
            echo $veiculo;
            break;

        case 3:
            $veiculo=new MicroOnibus();
            $veiculo->setTipo("micro-ônibus");
            $veiculo->setAluguel(readline("Digite o valor do aluguel do veículo: "));
            $veiculo->setKmsRodados(readline("Digite a quantidade de quilômetros rodados pelo veículo: "));
            echo $veiculo;
            break;

        case 4:
            $veiculo=new Onibus();
            $veiculo->setTipo("ônibus");
            $veiculo->setAluguel(readline("Digite o valor do aluguel do veículo: "));
            $veiculo->setKmsRodados(readline("Digite a quantidade de quilômetros rodados pelo veículo: "));
            echo $veiculo;
            break;

        default:
            echo "Opção INVÁLIDA!\n";

    }

} while ($opcao != 0);
