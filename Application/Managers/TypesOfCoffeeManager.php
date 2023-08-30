<?php

namespace Application\Managers;

use Application\Interfaces\ITypesOfCoffeeRepository;
// use Domain\Entities\TypesOfCoffee;

class TypesOfCoffeeManager
{
    private $interface;

    public function __construct(ITypesOfCoffeeRepository $iTypesOfCoffeeRepository)
    {
        $this->interface = $iTypesOfCoffeeRepository;
    }

    public function find(int $id)
    {
        return $this->interface->find($id);
    }
}
