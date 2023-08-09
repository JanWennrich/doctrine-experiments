<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once __DIR__ . "/vendor/autoload.php";

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . "/src"],
    isDevMode: true,
);

$connection = DriverManager::getConnection([
    'driver'   => 'pdo_mysql',
    'user'     => 'doctrine-experiments',
    'password' => 'doctrine-experiments',
    'dbname'   => 'doctrine_experiments',
], $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);