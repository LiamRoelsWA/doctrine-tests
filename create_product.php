<?php

require_once "./bootstrap.php";

use Entities\Product;

$newProductName = "2de product";

$product = new Product();

$product->setName($newProductName);
$product->setDescription('Dit is het 2de product dat ik toevoeg');
$product->setPrice(30);
$product->setSlug('tweede-product');
$product->setVat(21);

$em->persist($product);
$em->flush();

echo "Created Product with ID " . $product->getId() . "\n";
