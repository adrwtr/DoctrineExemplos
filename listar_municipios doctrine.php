<?php
// Script start
echo memory_get_usage() . "\n"; // 36640
$time_start = microtime(true); 
set_time_limit( 999999 );


// create_product.php
require_once "bootstrap.php";

$arrMunicipios = $entityManager->getRepository('Municipio')
   ->getBairrosFromUF('SC');

foreach ($arrMunicipios as $key => $value) 
{
   echo "codigo cidade:" . $value['cd_municipio'] . "<BR>";
   echo "ds_uf:" . $value['ds_uf'] . "<BR>";
   echo "ds_municipio:" . $value['ds_municipio'] . "<BR>";
   echo "ds_bairro:" . $value['ds_bairro'] . "<BR>";
   echo "<HR>";
}


$arrObjBairros = $entityManager->getRepository('Bairro')->findAll();


foreach ($arrObjBairros as $key => $value) 
{
   echo "cd_bairro: " . $value->getCdBairro(). "<BR>";
   echo "ds_bairro: " . $value->getDsBairro() . "<BR>";
   echo "<HR>";   
}


$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes other wise seconds
$execution_time = ($time_end - $time_start);

//execution time of the script
echo '<b>Total Execution Time:</b> '.$execution_time.' Mins. <BR><BR>';
echo memory_get_usage() . "\n"; // 36640