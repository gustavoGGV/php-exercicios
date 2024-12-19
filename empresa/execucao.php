<?php

require_once("modelo/Gerente.php");
require_once("modelo/Desenvolvedor.php");
require_once("modelo/Estagiario.php");

$opcao=0;
do{
    echo "\n-------ESCOLHA UM CARGO-------\n";
    echo "1- Gerente\n";
    echo "2- Desenvolvedor\n";
    echo "3- Estagiário\n";
    echo "0- SAIR\n";

    $opcao=readline("Escolha a opção: ");
    switch ($opcao){
        case 0:
            echo "Programa encerrado!\n";
            break;

        case 1:
            $fun=new Gerente();
            $fun->setNome(readline("Digite o nome do funcionário: "));
            echo $fun;
            break;

        case 2:
            $fun=new Desenvolvedor();
            $fun->setNome(readline("Digite o nome do funcionário: "));
            echo $fun;
            break;

        case 3:
            $fun=new Estagiario();
            $fun->setNome(readline("Digite o nome do funcionário: "));
            echo $fun;
            break;

        default:
            echo "Opção INVÁLIDA!\n";
    }
} while($opcao!=0);
