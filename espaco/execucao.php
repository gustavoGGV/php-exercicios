<?php

require_once("modelo/Hotel.php");
require_once("modelo/Restaurante.php");
require_once("modelo/PontoTuristico.php");

$espacos=array();

$opcao=0;
do {

    echo "\n\n---------------------------\n";
    echo "| 1 - Cadastrar espaço    |\n";
    echo "| 2 - Excluir espaço      |\n";
    echo "| 3 - Listar espaços      |\n";
    echo "| 0 - Sair                |\n";
    echo "---------------------------\n";

    $opcao=readline("Digite a opção que você deseja utilizar: ");

    switch($opcao) {

        case 0:
            echo "\nPrograma encerrado!\n";
            break;

        case 1:
            echo "\n\n---------------------------\n";
            echo "| 1 - Hotel               |\n";
            echo "| 2 - Restaurante         |\n";
            echo "| 3 - Ponto turístico     |\n";
            echo "---------------------------\n";

            $j=1;
            do {
                $opcaoEspaco=readline("Que tipo de espaço você deseja utilizar?: ");
            
                if($opcaoEspaco==1){

                    $espaco=new Hotel();
                    $espaco->setNome(readline("Digite o nome do espaço: "));
                    $espaco->setEndereco(readline("Digite o endereço do espaço: "));
                    $espaco->setNumeroEstrelas(readline("Digite o número de estrelas do espaço: "));

                    $i=1;
                    do {

                        $opcaoCafeIncluso=readline("O espaço tem café incluso (s/n)?: ");

                        if($opcaoCafeIncluso=="s") {

                            $opcaoCafeIncluso=true;
                            $i=0;
                            break;

                        } else if($opcaoCafeIncluso=="n") {

                            $opcaoCafeIncluso=false;
                            $i=0;
                            break;

                        } else {

                            echo "\nOpção inválida!\n";

                        }
                    } while($i=1);

                    $espaco->setCafeIncluso($opcaoCafeIncluso);

                    array_push($espacos, $espaco);

                    $j=0;
                    break;

                } else if($opcaoEspaco==2) {

                    $espaco=new Restaurante();
                    $espaco->setNome(readline("Digite o nome do espaço: "));
                    $espaco->setEndereco(readline("Digite o endereço do espaço: "));
                    $espaco->setTipoComida(readline("Digite o tipo de comida do espaço: "));

                    array_push($espacos, $espaco);

                    $j=0;
                    break;

                } else if($opcaoEspaco==3) {

                    $espaco=new PontoTuristico();
                    $espaco->setNome(readline("Digite o nome do espaço: "));
                    $espaco->setEndereco(readline("Digite o endereço do espaço: "));
                    $espaco->setDuracaoDaVisita(readline("Digite a quantidade de dias da visita: "));

                    array_push($espacos, $espaco);

                    $j=0;
                    break;

                } else {

                    echo "\nOpção inválida!\n";

                }

            } while($j=1);

            break;

        case 2:
            $k=1;
            foreach($espacos as $e) {

                if($e instanceof Hotel) {

                    echo "\n" . $k . " -";
                    echo $e->getDadosHotel() . "\n\n";
                    $k++;

                } else if($e instanceof Restaurante) {

                    echo "\n" . $k . " -";
                    echo $e->getDadosRestaurante() . "\n\n";
                    $k++;

                } else if($e instanceof PontoTuristico) {

                    echo "\n" . $k . " -";
                    echo $e->getDadosPontoTuristico() . "\n\n";
                    $k++;

                }

            }

            echo "\n";
            $opcaoDeletar=readline("Que espaço você deseja deletar?: ");
            $opcaoDeletar--;
            array_splice($espacos, $opcaoDeletar, 1);
            
            break;

        case 3:

            $k=1;
            foreach($espacos as $e) {

                if($e instanceof Hotel) {

                    echo "\n" . $k . " -";
                    echo $e->getDadosHotel() . "\n\n";
                    $k++;

                } else if($e instanceof Restaurante) {

                    echo "\n" . $k . " -";
                    echo $e->getDadosRestaurante() . "\n\n";
                    $k++;

                } else if($e instanceof PontoTuristico) {

                    echo "\n" . $k . " -";
                    echo $e->getDadosPontoTuristico() . "\n\n";
                    $k++;

                }

            }

            break;

    }

} while($opcao!=0);
