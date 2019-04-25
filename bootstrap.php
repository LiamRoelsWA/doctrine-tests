<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, null, null, false);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => 'root',
    'dbname' => 'product_db',
    'host' => 'localhost:8889'
);

// obtaining the entity manager
$em = EntityManager::create($conn, $config);