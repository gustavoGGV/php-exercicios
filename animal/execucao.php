<?php

require_once("modelo/Cachorro.php");
require_once("modelo/Gato.php");

$cachorro1=new Cachorro();
$cachorro1->setNome("Fiona");
$cachorro1->setRaca("Shih-tzu vira-lata caramelo com branco");
echo $cachorro1->getDados();
echo $cachorro1->latir();

$cachorro2=new Cachorro();
$cachorro2->setNome("Keise");
$cachorro2->setRaca("Vira-lata marrom");
echo $cachorro2->getDados();
echo $cachorro2->latir();

$gato1=new Gato();
$gato1->setNome("Buster");
$gato1->setRaca("Vira-lata preto");
echo $gato1->getDados();
echo $gato1->miar();

$gato2=new Gato();
$gato2->setNome("Missy");
$gato2->setRaca("Vira-lata branco com cinza");
echo $gato2->getDados();
echo $gato2->miar();
