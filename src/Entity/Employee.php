<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
#[UniqueEntity('email', message: 'This email is already used.')]
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Name is required')]
    private ?string $name= null;
    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Email is required')]
    #[Assert\Email(message: 'Please provide a valid email')]
    private ?string $email= null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: 'Phone number is required')]
    private ?string $phoneNumber= null;

    #[ORM\Column(type:'date')]
    #[Assert\NotBlank(message: 'Hire date is required')]
    #[Assert\Date(message: 'Please enter a valid date')]
    private ?\DateTime $hireDate= null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Department is required')]
    private ?Department $department= null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getHireDate(): ?\DateTime
    {
        return $this->hireDate;
    }

    public function setHireDate(?\DateTime $hireDate): static
    {
        $this->hireDate = $hireDate;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): static
    {
        $this->department = $department;

        return $this;
    }
}
