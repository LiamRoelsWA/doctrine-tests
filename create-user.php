<?php

require_once "./bootstrap.php";

use Entities\Customer;

$user = new Customer();

$user->setFirstName("Test");
$user->setLastName("User");
$user->setEmail("test@user.be");
$user->setCellphone("0412345678");
$user->setPassword("AZERTY123");


$em->persist($user);
$em->flush();
