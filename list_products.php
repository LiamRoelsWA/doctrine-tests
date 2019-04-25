<?php

require_once "bootstrap.php";

use Symfony\Component\VarDumper\VarDumper;

$categoryRepository = $em->getRepository(\Entities\Category::class);
$categories = $categoryRepository->findAll();
$customerRepo = $em->getRepository(\Entities\Customer::class);
$customers = $customerRepo->findAll();

foreach ($categories as $category)
{
    VarDumper::dump($category);
    VarDumper::dump('=====================');
}

foreach ($customers as $customer)
{
    VarDumper::dump($customer);
    VarDumper::dump('=====================');
}