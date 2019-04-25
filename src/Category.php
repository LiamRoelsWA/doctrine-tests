<?php


namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping;

/**
 * Class Category
 * @package Entities
 *
 * @Mapping\Entity @Mapping\Table(name="categories")
 */
class Category
{
    /**
     * @Mapping\Id @Mapping\Column(type="smallint") @Mapping\GeneratedValue
     *
     * @var int
     */
    protected $id;


    /**
     * @Mapping\Column(type="string")
     *
     * @var string
     */
    protected $name;


    /**
     * One Category has many products
     * @Mapping\OneToMany(targetEntity="Product", mappedBy="category", fetch="EAGER")
     */
    private $products;


    public function __construct()
    {
        $this->products = new ArrayCollection();
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }


    /**
     * @param mixed $products
     */
    public function setProducts($products): void
    {
        $this->products = $products;
    }
}