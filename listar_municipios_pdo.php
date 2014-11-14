<?php
set_time_limit( 999999 );
echo memory_get_usage() . "\n"; // 36640

function execucao(){ 
    $sec = explode(" ",microtime());
    $tempo = $sec[1] + $sec[0];
    return $tempo; 
}

$inicio = execucao();



$query = "SELECT m0_.cd_municipio AS cd_municipio, m0_.ds_uf AS ds_uf, m0_.ds_municipio AS ds_municipio, b1_.ds_bairro AS ds_bairro FROM municipios m0_ INNER JOIN bairros b1_ ON m0_.cd_municipio = b1_.cd_municipio WHERE m0_.ds_uf = 'SC'";


 $options = array(
     \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
 );

 // conecta com o banco
 $objPDO = new \PDO(
     'mysql:host=localhost;dbname=doctrine_test;',
     'backup',
     'UniSeguro',
     $options
 );

$objPDOStatement = $objPDO->prepare($query);
$objPDOStatement->execute();
$arrValores = $objPDOStatement->fetchAll(\PDO::FETCH_ASSOC);
$objPDOStatement->closeCursor();



foreach ($arrValores as $key => $value) 
{
   
   echo "codigo cidade:" . $value['cd_municipio'] . "<BR>";
   echo "ds_uf:" . $value['ds_uf'] . "<BR>";
   echo "ds_municipio:" . $value['ds_municipio'] . "<BR>";
   echo "ds_bairro:" . $value['ds_bairro'] . "<BR>";
   echo "<HR>";
}



require_once('src/Bairro.php');



$query = "select * from bairros";

$objPDOStatement = $objPDO->prepare($query);
$objPDOStatement->execute();
$arrValores = $objPDOStatement->fetchAll(\PDO::FETCH_ASSOC);
$objPDOStatement->closeCursor();


foreach ($arrValores as $key => $value) 
{

   echo "cd_bairro: " . $value['cd_bairro'] . "<BR>";
   echo "ds_bairro: " . $value['ds_bairro'] . "<BR>";
   echo "<HR>";
}


$fim = execucao();

// Agora é só fazermos a subtração de um pelo outro, e usar o number_format() do PHP para formatar com 6 casas depois da virgula e pronto, mas caso você queira alterar esse número de casas depois da vírgula para mais ou menos, fique a vontade
$tempo = number_format(($fim-$inicio),6);

//execution time of the script
print "<BR><BR>Tempo de Execução: <b>".$tempo."</b> segundos<BR><BR>";
echo memory_get_usage() . "\n"; // 36640