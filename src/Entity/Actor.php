<?php

namespace App\Entity;

use App\Repository\ActorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActorRepository::class)
 */
class Actor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datadenaixement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nacionalitat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $biografia;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDatadenaixement(): ?\DateTimeInterface
    {
        return $this->datadenaixement;
    }

    public function setDatadenaixement(?\DateTimeInterface $datadenaixement): self
    {
        $this->datadenaixement = $datadenaixement;

        return $this;
    }

    public function getNacionalitat(): ?string
    {
        return $this->nacionalitat;
    }

    public function setNacionalitat(?string $nacionalitat): self
    {
        $this->nacionalitat = $nacionalitat;

        return $this;
    }

    public function getBiografia(): ?string
    {
        return $this->biografia;
    }

    public function setBiografia(?string $biografia): self
    {
        $this->biografia = $biografia;

        return $this;
    }
}
