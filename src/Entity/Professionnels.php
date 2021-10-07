<?php

namespace App\Entity;

use App\Repository\ProfessionnelsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfessionnelsRepository::class)
 */
class Professionnels
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
    private $societe_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="text")
     */
    private $accessibilite;

    /**
     * @ORM\Column(type="text")
     */
    private $etat_mur;

    /**
     * @ORM\Column(type="integer")
     */
    private $superficie;

    /**
     * @ORM\Column(type="integer")
     */
    private $hauteur_max;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $telecharger_photo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocieteName(): ?string
    {
        return $this->societe_name;
    }

    public function setSocieteName(string $societe_name): self
    {
        $this->societe_name = $societe_name;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAccessibilite(): ?string
    {
        return $this->accessibilite;
    }

    public function setAccessibilite(string $accessibilite): self
    {
        $this->accessibilite = $accessibilite;

        return $this;
    }

    public function getEtatMur(): ?string
    {
        return $this->etat_mur;
    }

    public function setEtatMur(string $etat_mur): self
    {
        $this->etat_mur = $etat_mur;

        return $this;
    }

    public function getSuperficie(): ?int
    {
        return $this->superficie;
    }

    public function setSuperficie(int $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getHauteurMax(): ?int
    {
        return $this->hauteur_max;
    }

    public function setHauteurMax(int $hauteur_max): self
    {
        $this->hauteur_max = $hauteur_max;

        return $this;
    }

    public function getTelechargerPhoto(): ?string
    {
        return $this->telecharger_photo;
    }

    public function setTelechargerPhoto(?string $telecharger_photo): self
    {
        $this->telecharger_photo = $telecharger_photo;

        return $this;
    }
}
