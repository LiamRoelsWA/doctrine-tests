<?php


namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Customer
 * @package Entities
 *
 * @ORM\Entity @ORM\Table(name="customers")
 */
class Customer
{
    protected $firstName;


    protected $lastName;


    
}