<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = false;
$doctrine_config_path = "config/xml";
$config = Setup::createXMLMetadataConfiguration(
   array( $doctrine_config_path ), 
   $isDevMode
);

$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => '.....',
    'password' => '.....',
    'dbname'   => 'doctrine_test',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);