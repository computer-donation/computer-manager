<?php

namespace App\Entity;

use App\Repository\ComputerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComputerRepository::class)]
class Computer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'integer')]
    private int $donation;

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

    #[ORM\Column(type: 'simple_array')]
    private array $ram = [];

    #[ORM\Column(type: 'simple_array')]
    private array $storage = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDonation(): int
    {
        return $this->donation;
    }

    public function setDonation(int $donation): self
    {
        $this->donation = $donation;

        return $this;
    }

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

    public function getRam(): array
    {
        return $this->ram;
    }

    public function setRam(array $ram): self
    {
        $this->ram = $ram;

        return $this;
    }

    public function getStorage(): array
    {
        return $this->storage;
    }

    public function setStorage(array $storage): self
    {
        $this->storage = $storage;

        return $this;
    }
}
