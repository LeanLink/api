<?php

namespace Leanlink\Model;

class Resource
{
    private string $firstName;
    private string $lastName;
    private ?string $email;
    private ?string $phone1;
    private ?string $phone2;
    private ?string $phone3;
    private ?string $phone4;

    public function __construct(private string $id)
    {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getPhone1(): ?string
    {
        return $this->phone1;
    }

    public function setPhone1(?string $phone1): void
    {
        $this->phone1 = $phone1;
    }

    public function getPhone2(): ?string
    {
        return $this->phone2;
    }

    public function setPhone2(?string $phone2): void
    {
        $this->phone2 = $phone2;
    }

    public function getPhone3(): ?string
    {
        return $this->phone3;
    }

    public function setPhone3(?string $phone3): void
    {
        $this->phone3 = $phone3;
    }

    public function getPhone4(): ?string
    {
        return $this->phone4;
    }

    public function setPhone4(?string $phone4): void
    {
        $this->phone4 = $phone4;
    }
}
