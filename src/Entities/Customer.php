<?php


namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Customer
 * @package Entities
 *
 * @ORM\Entity
 * @ORM\Table(name="customers")
 */
class Customer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="smallint")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     * @var int
     */
    protected $id;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $first_name;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $last_name;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $email;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $cellphone;


    /**
     * @ORM\ManyToOne(targetEntity="Address", inversedBy="customers")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
     */
    protected $address;


    /**
     * @ORM\Column(type="password")
     *
     * @var string
     */
    protected $password;

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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getCellphone(): string
    {
        return $this->cellphone;
    }

    /**
     * @param string $cellphone
     */
    public function setCellphone(string $cellphone): void
    {
        $this->cellphone = $cellphone;
    }
}