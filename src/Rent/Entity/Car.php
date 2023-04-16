<?php

declare(strict_types=1);

namespace Rent\Entity;

class Car
{
    public function __construct(
        private readonly string $id,
        private readonly string $brand,
        private readonly string $model,
        private readonly string $color,
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
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

}