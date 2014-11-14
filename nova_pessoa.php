<?php
// create_product.php
require_once "bootstrap.php";

$objPessoa = new Pessoa();
$objPessoa->setNmPessoa('Adriano');

$entityManager->persist($objPessoa);
$entityManager->flush();

echo "Pessoa criada com o código " . $objPessoa->getCdPessoa() . "\n";