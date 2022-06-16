<?php

namespace App\Entity;

use App\Repository\LaptopRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LaptopRepository::class)]
class Laptop extends Computer
{
    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $cpu = null;

    public function getCpu(): ?int
    {
        return $this->cpu;
    }

    public function setCpu(?int $cpu): self
    {
        $this->cpu = $cpu;

        return $this;
    }
}
