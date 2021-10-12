<?php

namespace App\Entity;

use App\Repository\ParticulierRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\constraints as assert;
/**
 * @ORM\Entity(repositoryClass=ParticulierRepository::class)
 */
class Particulier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $civilites;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $email;

    /**
     * @ORM\Column(type="text")
     */
    private $message;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Realisation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCivilites(): ?string
    {
        return $this->civilites;
    }

    public function setCivilites(string $civilites): self
    {
        $this->civilites = $civilites;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getRealisation(): ?string
    {
        return $this->Realisation;
    }

    public function setRealisation(string $Realisation): self
    {
        $this->Realisation = $Realisation;

        return $this;
    }
}
