<?php

namespace App\Entity;

use App\Enum\Status;
use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
class Computer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private readonly int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'string', length: 7, enumType: Status::class)]
    private Status $status = Status::Unknown;

    #[ORM\Column(type: 'integer')]
    private int $donation;

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

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function setStatus(Status $status): self
    {
        $this->status = $status;

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
