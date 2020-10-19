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
     * Try to get an id from the user class instance
     */
    public function testHasId()
    {
        self::assertNull($this->user->getId());
    }

    public function testHasFirstName()
    {
        $firstname = "Prénom";

        $this->user->setFirstname($firstname);
        self::assertEquals($firstname, $this->user->getFirstname());
    }

    public function testHasLastName()
    {
        $lastname = "Nom";

        $this->user->setLastname($lastname);
        self::assertEquals($lastname, $this->user->getLastname());
    }

    public function testHasAddressEmail()
    {
        $email = "user@email.com";

        $this->user->setEmail($email);
        self::assertEquals($email, $this->user->getEmail());
    }

    public function testHasPassword()
    {
        $password = "Mot de passe";

        $this->user->setPassword($password);
        self::assertEquals($password, $this->user->getPassword());
    }

    public function testHasRoles()
    {
        $roles = $this->user->getRoles();
        $roles[] = "ROLE_TEST";

        $this->user->setRoles($roles);
        self::assertEquals($roles, $this->user->getRoles());
    }

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