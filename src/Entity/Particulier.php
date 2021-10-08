<?php

namespace App\Entity;

use App\Repository\ParticulierRepository;
use Doctrine\ORM\Mapping as ORM;

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
    private $Civilites;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Email;

    /**
     * @ORM\Column(type="text")
     */
    private $Message;

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
        return $this->Civilites;
    }

    public function setCivilites(string $Civilites): self
    {
        $this->Civilites = $Civilites;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }
    

    public function getMessage(): ?string
    {
        return $this->Message;
    }
     
    public function setMessage(string $Message): self
    {
        $this->Message = $Message;

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
