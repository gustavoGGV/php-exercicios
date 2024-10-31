<?php

require_once("modelo/CarroPasseio.php");
require_once("modelo/Caminhao.php");
require_once("modelo/Onibus.php");

$carro=new CarroPasseio();
$carro->setModelo("Chevrolet Astra");
$carro->setCor("Prata");
$carro->setVelocidadeMax(240);
$carro->setQtdPassageiros(5);
echo $carro->getDados();

$caminhao=new Caminhao();
$caminhao->setModelo("Scania 113");
$caminhao->setCor("Azul claro");
$caminhao->setVelocidadeMax(200);
$caminhao->setQtdCarga(10);
$caminhao->setAltura(20);
echo $caminhao->getDados();

$onibus=new Onibus();
$onibus->setModelo("Marcopolo Paradiso G4 1400 Scania");
$onibus->setCor("Azul");
$onibus->setVelocidadeMax(150);
$onibus->setQtdPassageiros(40);
$onibus->setPesoMax(7);
echo $onibus->getDados();

echo "\n";
