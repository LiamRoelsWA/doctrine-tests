<?php

// update_product.php <id> <new-name>
require_once "bootstrap.php";

use Entities\Product;

$id = $argv[1];
$newName = $argv[2];

$product = $em->find(Product::class, $id);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName($newName);

$em->flush();

echo 'Product updated!';