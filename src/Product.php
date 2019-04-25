<?php


namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping;

/**
 * Class Product
 * @package Entities
 *
 * @Mapping\Entity @Mapping\Table(name="products")
 */
class Product
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
     * @Mapping\Column(type="string")
     *
     * @var string
     */
    protected $description;


    /**
     * @Mapping\Column(type="string")
     *
     * @var string
     */
    protected $slug;


    /**
     * @Mapping\Column(type="float")
     *
     * @var double
     */
    protected $price;


    /**
     * @Mapping\Column(type="integer")
     *
     * @var int
     */
    protected $vat;


    /**
     * @Mapping\ManyToOne(targetEntity="Category", inversedBy="products")
     * @Mapping\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;


    /**
     * One Product has many Details
     * @Mapping\OneToMany(targetEntity="Detail", mappedBy="product", fetch="EAGER")
     */
    private $details;


    public function __construct()
    {
        $this->details = new ArrayCollection();
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }


    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }


    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }


    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }


    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }


    /**
     * @return int
     */
    public function getVat(): int
    {
        return $this->vat;
    }


    /**
     * @param int $vat
     */
    public function setVat(int $vat): void
    {
        $this->vat = $vat;
    }


    /**
     * @return float
     */
    public function getPriceVatInclusive()
    {
        return $this->price * (1 + $this->vat / 100);
    }


    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }


    /**
     * @param mixed $details
     */
    public function setDetails($details): void
    {
        $this->details = $details;
    }
}