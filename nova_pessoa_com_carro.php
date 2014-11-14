<?php
// create_product.php
require_once "bootstrap.php";

$objPessoa = new Pessoa();
$objPessoa->setNmPessoa('Adriano Carro');
$entityManager->persist($objPessoa);
$entityManager->flush();


$objCarro = new Carro();
$objCarro->setNmMarca('marca');
$objCarro->setNmCarro('nome carro');
$entityManager->persist($objCarro);
$entityManager->flush();


$objPessoa->adicionarCarro($objCarro);
$objCarro->adicionarPessoa($objPessoa);


$entityManager->flush();


echo "Pessoa criada com o código " . $objPessoa->getCdPessoa() . "<BR>";
echo "Carro criada com o código " . $objCarro->getCdCarro() . "<BR>";