<?php
// create_product.php
require_once "bootstrap.php";

$objPessoa = new Pessoa();
$objPessoa->setNmPessoa('Adriano Contato');

$entityManager->persist($objPessoa);
$entityManager->flush();

$cd_pessoa = $objPessoa->getCdPessoa();
$ds_email = 'adriano@unimestre.com.br';
$cd_tipo  = 1;

$objPessoaContato = new PessoaContato();
$objPessoaContato->setDsContato($ds_email);
$objPessoaContato->setCdTipo($cd_tipo);
$entityManager->persist($objPessoaContato);


// $objPessoaContato->setCdPessoa($objPessoa);
$objPessoa->adicionarContato($objPessoaContato);


$entityManager->flush();


echo "Pessoa criada com o código " . $objPessoa->getCdPessoa() . "\n";