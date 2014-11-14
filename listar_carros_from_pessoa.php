<?php
// list_products.php
require_once "bootstrap.php";

$objRepositorioPessoas = $entityManager->getRepository('Pessoa');

$objPessoa = $objRepositorioPessoas->findOneBy(
   array('cd_pessoa' => '5')
);

echo  $objPessoa->getNmPessoa() . "<BR>";

$arrCarros = $objPessoa->getCarros()
   ->toArray();

echo "<HR>";

echo $arrCarros[0]->getNmMarca();


echo "<HR>";


$objRepositorioCarros = $entityManager->getRepository('Carro');

$objCarro = $objRepositorioCarros->findOneBy(
   array('cd_carro' => '2')
);

echo  $objCarro->getNmCarro() . "<BR>";

$arrPessoas = $objCarro->getPessoas()
   ->toArray();

echo "<HR>";

echo $arrPessoas[0]->getNmPessoa();