<?php


namespace Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class Address
 * @package Entities
 *
 * @ORM\Entity
 * @ORM\Table(name="addresses")
 */
class Address
{
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue
     *
     * @var int
     */
    protected $id;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $street;


    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    protected $number;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $box;


    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    protected $zip;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $country;


    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="addresses", fetch="EAGER")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    protected $customer;


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
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getBox(): string
    {
        return $this->box;
    }

    /**
     * @param string $box
     */
    public function setBox(string $box): void
    {
        $this->box = $box;
    }

    /**
     * @return int
     */
    public function getZip(): int
    {
        return $this->zip;
    }

    /**
     * @param int $zip
     */
    public function setZip(int $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }
}