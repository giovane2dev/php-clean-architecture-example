<?php

namespace Domain\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesOfCoffee
 *
 * @ORM\Table(name="types_of_coffee")
 * @ORM\Entity
 */
class TypesOfCoffee extends Base
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=250, nullable=false)
     */
    private $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
