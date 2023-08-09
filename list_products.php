<?php

use Jan\DoctrineExperiments\Product;

require_once "bootstrap.php";

$productRepository = $entityManager->getRepository(Product::class);
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("- %s\n", $product->getName());
}