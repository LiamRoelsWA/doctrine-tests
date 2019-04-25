<?php

require_once "./bootstrap.php";

use Entities\Product;

$newProductName = "Extra Product";

$product = new Product();

$product->setName($newProductName);
$product->setDescription('Beschrijving van het testproduct');
$product->setPrice(15);
$product->setSlug('test-product');
$product->setVat(21);

$em->persist($product);
$em->flush();

echo "Created Product with ID " . $product->getId() . "\n";
