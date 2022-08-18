<?php

namespace App\app\Entities;

use App\Entities\BaseEntity;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping AS ORM;

#[ORM\Entity]
#[ORM\Table('appointments')]

class Appointment extends \App\Entities\BaseEntity
{
    #[ORM\Column(type: Types::INTEGER)]
    #[ORM\Id, ORM\GeneratedValue(strategy: 'AUTO')]
    protected int $id;

    #[ORM\Column(name: 'date', type: Types::STRING, length: 255, nullable: false)]
    protected string $date;

    #[ORM\Column(name: 'city', type: Types::STRING, length: 255, nullable: false)]
    protected string $city;


}

