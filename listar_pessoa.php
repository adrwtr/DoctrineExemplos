<?php
// list_products.php
require_once "bootstrap.php";

$objRepositorioPessoas = $entityManager->getRepository('Pessoa');


$arrPessoas = $objRepositorioPessoas->findAll();

foreach ($arrPessoas as $objPessoa) 
{
   echo  $objPessoa->getNmPessoa() . "<BR>";
}