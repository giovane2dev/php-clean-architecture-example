<?php

namespace WebUI\Controllers;

use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};
use Application\Managers\TypesOfCoffeeManager;

class TypesOfCoffeeController
{
    private $manager;

    public function __construct(TypesOfCoffeeManager $typesOfCoffeeManager)
    {
        $this->manager = $typesOfCoffeeManager;
    }

    public function find($request, $response, $args)
    {
        $type = $this->manager->find($args['id']);

        $response->getBody()->write(json_encode($type ? $type->getType() : 'type not found'));

        return $response;
    }
}
