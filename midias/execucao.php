<?php

require_once("modelo/Midia.php");
require_once("modelo/Cd.php");
require_once("modelo/Dvd.php");

$midias=array();

for($i=0;$i<5;$i++) {

    $tipo=0;
    do {

        $tipo=readline("Tipo? (1 - CD; 2 - DVD; 3 - Mídia): ");

        if($tipo==1) {

            $m=new Cd(); 

        } else if($tipo==2) {

            $m=new Dvd();

        } else if($tipo==3) {

            $m=new Midia();

        }else {

            echo "\nTipo inválido!\n";

        }

    } while($tipo!=1 && $tipo!=2 && $tipo!=3);

    $m->setDescricao(readline("Descrição: "));
    $m->setPrecoPago(readline("Preço pago (em R$): "));

    array_push($midias, $m);

    echo "\n";

}

foreach($midias as $mi) {

    echo $mi->getTipo();
    echo $mi->getDados();

}
