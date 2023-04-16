<?php

declare(strict_types=1);

namespace Customer\Entity;

class Customer
{
    public function __construct(
        private readonly string $id,
        private string $name,
        private string $address,
        private int $age
    ) {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function address(): string
    {
        return $this->address;
    }

    public function age(): int
    {
        return $this->age;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
