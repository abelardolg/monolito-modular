<?php

declare(strict_types=1);

namespace Rent\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Rent\Entity\Rent;

interface RentRepository
{
    public function save(Rent $rent): void;
}
