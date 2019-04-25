<?php


namespace Entities;

use Doctrine\ORM\Mapping;

/**
 * Class Detail
 * @package Entities
 *
 * @Mapping\Entity @Mapping\Table(name="details")
 */
class Detail
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
    protected $text;


    /**
     * @Mapping\ManyToOne(targetEntity="Product", inversedBy="details")
     * @Mapping\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;


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
    public function getText(): string
    {
        return $this->text;
    }


    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }


    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }


    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }


}