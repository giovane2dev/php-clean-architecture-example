<?php

use Infra\Data\Interfaces\IDatabase;
use Infra\Data\Context\AppDbContext;

use Application\Interfaces\ITypesOfCoffeeRepository;
use Infra\Data\Repositories\TypesOfCoffeeRepository;

return [
    IDatabase::class => \DI\create(AppDbContext::class),

    ITypesOfCoffeeRepository::class => \DI\create(TypesOfCoffeeRepository::class)
        ->constructor(\DI\get(IDatabase::class))
];
