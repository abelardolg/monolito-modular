<?php

declare(strict_types=1);

namespace Employee\Entity;

class Employee
{
    public function __construct(
        private readonly string $id,
        private string $name
    )
    {
    }

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function name(): string
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
}