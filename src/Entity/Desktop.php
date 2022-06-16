<?php

namespace App\Entity;

use App\Repository\DesktopRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DesktopRepository::class)]
class Desktop extends Computer
{
    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $cpu;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $mainboard;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $monitor;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $psu;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $vga;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $computerCase;

    public function getCpu(): ?int
    {
        return $this->cpu;
    }

    public function setCpu(?int $cpu): self
    {
        $this->cpu = $cpu;

        return $this;
    }

    public function getMainboard(): ?int
    {
        return $this->mainboard;
    }

    public function setMainboard(?int $mainboard): self
    {
        $this->mainboard = $mainboard;

        return $this;
    }

    public function getMonitor(): ?int
    {
        return $this->monitor;
    }

    public function setMonitor(?int $monitor): self
    {
        $this->monitor = $monitor;

        return $this;
    }

    public function getPsu(): ?int
    {
        return $this->psu;
    }

    public function setPsu(?int $psu): self
    {
        $this->psu = $psu;

        return $this;
    }

    public function getVga(): ?int
    {
        return $this->vga;
    }

    public function setVga(?int $vga): self
    {
        $this->vga = $vga;

        return $this;
    }

    public function getComputerCase(): ?int
    {
        return $this->computerCase;
    }

    public function setComputerCase(?int $computerCase): self
    {
        $this->computerCase = $computerCase;

        return $this;
    }
}
