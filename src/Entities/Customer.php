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
    protected $firstName;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $lastName;


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
    protected $phoneNr;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
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
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
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
    public function getPhoneNr(): string
    {
        return $this->phoneNr;
    }

    /**
     * @param string $phoneNr
     */
    public function setPhoneNr(string $phoneNr): void
    {
        $this->phoneNr = $phoneNr;
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



}