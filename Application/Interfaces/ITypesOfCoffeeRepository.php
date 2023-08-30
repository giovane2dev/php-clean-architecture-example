<?php

namespace Application\Interfaces;

// use Domain\Entities\TypesOfCoffee;

interface ITypesOfCoffeeRepository
{
    public function find(int $id);
}
