<?php

require_once("modelo/Produto.php");
require_once("modelo/Livro.php");
require_once("modelo/Computador.php");
require_once("modelo/Balde.php");

$p=new Produto();
$p->setDescricao("Carregador 33W");
$p->setUnidadeMedida("Unidade");

$l=new Livro();
$l->setDescricao("Laranja Mecânica");
$l->setUnidadeMedida("Unidade");
$l->setAutor("Daniel");

$c=new Computador();
$c->setDescricao("HP");
$c->setUnidadeMedida("Unidade");
$c->setProcessador("i5 6400");
$c->setMemoria("16gb");

$b=new Balde();
$b->setDescricao("Balde de metal");
$b->setUnidadeMedida("Litros");
$b->setCapacidade(5);

echo $p->getDados();
echo $l->getDados();
echo $c->getDados();
echo $b->getDados();
