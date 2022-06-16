<?php

namespace App\Entity;

use App\Repository\MiniComputerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MiniComputerRepository::class)]
class MiniComputer extends Computer
{
}
