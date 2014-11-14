<?php
// create_product.php
require_once "bootstrap.php";

$objPessoa = new Pessoa();

$arrPessoas = $entityManager->getRepository('Pessoa')
   ->getPessoa('5');

$objPessoa = $arrPessoas[0];

$nome_pessoa = $objPessoa->getNmPessoa();
$arrCarros = $objPessoa->getCarros()->toArray();


$objCarro = $arrCarros[0];
$nome_carro = $objCarro->getNmCarro();

echo $nome_pessoa . " tem um carro: ". $nome_carro;




$arrCarros = $entityManager->getRepository('Pessoa')
   ->getCarrosFromPessoa('5');

var_dump($arrCarros);
