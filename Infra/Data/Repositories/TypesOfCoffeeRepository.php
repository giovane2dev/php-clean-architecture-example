<?php

namespace Infra\Data\Repositories;

use Infra\Data\Interfaces\IDatabase;
use Application\Interfaces\ITypesOfCoffeeRepository;
use Domain\Entities\TypesOfCoffee;

class TypesOfCoffeeRepository implements ITypesOfCoffeeRepository
{
    // Doctrine\ORM\EntityManager
    private $entityManager;

    public function __construct(IDatabase $database)
    {
        $this->entityManager = $database->getInstance();
    }

    public function find(int $id)
    {
        $repo = $this->entityManager->getRepository(TypesOfCoffee::class);

        return $repo->findOneBy(['id' => $id]);
    }
}
