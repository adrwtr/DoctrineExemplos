<?php
// update_product.php <id> <new-name>
require_once "bootstrap.php";

$novo_nome          = "Akuma";
$cd_pessoa_procurar = 2;

$objPessoa = $entityManager->find(
   'Pessoa', 
   $cd_pessoa_procurar
);

if ($objPessoa === null) 
{
    echo "A pessoa não existe - cd_pessoa:  $cd_pessoa_procurar\n";
    exit(1);
}

$objPessoa->setNmPessoa($novo_nome);

$entityManager->flush();