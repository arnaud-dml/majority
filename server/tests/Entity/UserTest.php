<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    /**
     * @var User
     */
    private $user;

    protected function setUp(): void
    {
        $this->user = new User();
    }

    /**
     * Try to get an id from the user class instance - Unit testing the user's id
     */
    public function testHasId()
    {
        self::assertNull($this->user->getId());
    }

    /**
     * Unit testing the user's address email
     */
    public function testHasEmailAddress()
    {
        $email = "user@email.com";

        $this->user->setEmail($email);
        self::assertEquals($email, $this->user->getEmail());
    }

    /**
     * Unit testing the user's first name
     */
    public function testHasFirstName()
    {
        $firstname = "Prénom";

        $this->user->setFirstname($firstname);
        self::assertEquals($firstname, $this->user->getFirstname());
    }

    /**
     * Unit testing the user's last name
     */
    public function testHasLastName()
    {
        $lastname = "Nom";

        $this->user->setLastname($lastname);
        self::assertEquals($lastname, $this->user->getLastname());
    }

    /**
     * Unit testing the user's password
     */
    public function testHasPassword()
    {
        $password = "Mot de passe";

        $this->user->setPassword($password);
        self::assertEquals($password, $this->user->getPassword());
    }

    /**
     * Unit testing the user's phone
     */
    public function testHasPhone()
    {
        $phone = "06.01.02.03.04";

        $this->user->setPhone($phone);
        self::assertEquals($phone, $this->user->getPhone());
    }

    /**
     * Unit testing the user's birthdate
     */
    public function testHasBirthdate()
    {
        $birthdate = new \DateTime("01-02-0003");

        $this->user->setBirthdate($birthdate);
        self::assertEquals($birthdate, $this->user->getBirthdate());
    }

    /**
     * Unit testing the user's location
     */
    public function testHasAddress()
    {
        $address = [
            "street" => "110 Southmoor Road",
            "city" => "Oxford",
            "postCode" => "OX2 6RB",
            "country" => "United Kingdom"
        ];

        $this->user->setAddress($address);
        self::assertEquals($address, $this->user->getAddress());
    }

    /**
     * Unit testing the user's roles
     */
    public function testHasRoles()
    {
        $roles = $this->user->getRoles();
        $roles[] = "ROLE_TEST";

        $this->user->setRoles($roles);
        self::assertEquals($roles, $this->user->getRoles());
    }

    /**
     * Unit testing the user's token
     */
    public function testHasApiToken()
    {
        self::assertNull($this->user->getApiToken());
    }

    //
    // public function testConstruct()
    // {
    //     self::assertInstanceOf(ArrayCollection::class, $this->user->get...());
    //     self::assertCount(0, $this->user->get...());
    // }
    //
    // public function testHasUsername()
    // {
    //     self::assertEquals($this->user->getEmail(), $this->user->getUsername());
    // }
    //
    // public function testHasCreatedAtDate()
    // {
    //     $date = new \DateTime();
    //
    //     $this->user->setCreatedAt($date);
    //     self::assertEquals($date, $this->user->getCreatedAt());
    // }
    //
    // public function testHasUpdatedAtDate()
    // {
    //     $date = new \DateTime();
    //
    //     $this->user->setUpdatedAt($date);
    //     self::assertEquals($date, $this->user->getUpdatedAt());
    // }
}