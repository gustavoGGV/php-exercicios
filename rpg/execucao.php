<?php

require_once("modelo/Mago.php");
require_once("modelo/Combatente.php");
require_once("modelo/Curandeiro.php");
require_once("modelo/Poder.php");

$magos=array();

$cura=new Poder();
$cura->setDescricao("Recupera energia");
$cura->setForca(0);

$curaSuper=new Poder();
$curaSuper->setDescricao("Recupera energia super");
$curaSuper->setForca(20);

$golpe=new Poder();
$golpe->setDescricao("Golpe normal");
$golpe->setForca(0);

$golpeEspecial=new Poder();
$golpeEspecial->setDescricao("Golpe especial");
$golpeEspecial->setForca(15);


$opcao=0;
do {

    echo "\n1 - Criar mago\n2 - Usar mago\n0 - Sair\n";
    $opcao=readline("O que você deseja?: ");

    switch($opcao) {

        case 0:

            echo "\nSaindo...\n";
            break;

        case 1:
            
            $i=0;
            do {

                $i=readline("Você deseja criar que tipo de mago (1 - Curandeiro; 2 - Combatente)?: ");

                switch($i) {

                    case 1:

                        $mago=new Curandeiro();
                        $mago->setNome(readline("Qual o nome do mago?: "));
                        
                        $j=0;
                        do{

                            $j=readline("Qual será o poder de seu mago (1 - Cura; 2 - Cura Super)?: ");

                            switch($j) {

                                case 1:

                                    $mago->setPoder($cura);
                                    break;
                                
                                case 2:

                                    $mago->setPoder($curaSuper);
                                    break;

                                default:

                                    echo "\nOpção inválida!\n";
                                    break;

                            }

                        } while($j!=1 && $j!=2);

                        $mago->setForcaDeCura(readline("Qual será sua força de cura?: "));
                        array_push($magos, $mago);

                        break;
                    
                    case 2:

                        $mago=new Combatente();
                        $mago->setNome(readline("Qual o nome do mago?: "));
                        
                        $j=0;
                        do{

                            $j=readline("Qual será o poder de seu mago (1 - Golpe; 2 - Golpe Especial)?: ");

                            switch($j) {

                                case 1:

                                    $mago->setPoder($golpe);
                                    break;
                                
                                case 2:

                                    $mago->setPoder($golpeEspecial);
                                    break;

                                default:

                                    echo "\nOpção inválida!\n";
                                    break;

                            }

                        } while($j!=1 && $j!=2);

                        $mago->setForcaDeAtaque(readline("Qual será sua força de ataque?: "));
                        array_push($magos, $mago);

                        break;

                    default:

                        echo "\nOpção inválida!\n";
                        break;

                }

            } while($i!=1 && $i!=2);

            echo "\nMago criado!\n";

            break;

        case 2:

            $n=1;
            foreach($magos as $m) {

                echo "\n" . $n . " - " . $m->getNome() . "\n";

            }
            
            $k=0;
            do {

                $k=readline("Que mago você deseja utilizar?: ");
                $k--;
                echo "\nLançando o poder do mago...\n\n";

                sleep(1.5);

                echo $magos[$k]->lancarPoder();

            } while($k!=0);

            break;

        default:

            echo "\nOpção inválida!\n";
            break;

    }

} while($opcao!=0);
