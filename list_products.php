<?php

require_once "bootstrap.php";

use Entities\Product;
use Symfony\Component\VarDumper\VarDumper;

$categoryRepository = $em->getRepository(Product::class);
$categories = $categoryRepository->findAll();

foreach ($categories as $category)
{
    VarDumper::dump($category);
}