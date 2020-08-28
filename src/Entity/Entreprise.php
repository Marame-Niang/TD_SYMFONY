<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_entreprise;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $tel_entreprise;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email_entreprise;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $budget_entreprise;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $adr_entreprise;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=Compte::class, mappedBy="entreprise")
     */
    private $compte;

    public function __construct()
    {
        $this->compte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEntreprise(): ?string
    {
        return $this->nom_entreprise;
    }

    public function setNomEntreprise(string $nom_entreprise): self
    {
        $this->nom_entreprise = $nom_entreprise;

        return $this;
    }

    public function getTelEntreprise(): ?string
    {
        return $this->tel_entreprise;
    }

    public function setTelEntreprise(string $tel_entreprise): self
    {
        $this->tel_entreprise = $tel_entreprise;

        return $this;
    }

    public function getEmailEntreprise(): ?string
    {
        return $this->email_entreprise;
    }

    public function setEmailEntreprise(string $email_entreprise): self
    {
        $this->email_entreprise = $email_entreprise;

        return $this;
    }

    public function getBudgetEntreprise(): ?string
    {
        return $this->budget_entreprise;
    }

    public function setBudgetEntreprise(string $budget_entreprise): self
    {
        $this->budget_entreprise = $budget_entreprise;

        return $this;
    }

    public function getAdrEntreprise(): ?string
    {
        return $this->adr_entreprise;
    }

    public function setAdrEntreprise(string $adr_entreprise): self
    {
        $this->adr_entreprise = $adr_entreprise;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection|Compte[]
     */
    public function getCompte(): Collection
    {
        return $this->compte;
    }

    public function addCompte(Compte $compte): self
    {
        if (!$this->compte->contains($compte)) {
            $this->compte[] = $compte;
            $compte->setEntreprise($this);
        }

        return $this;
    }

    public function removeCompte(Compte $compte): self
    {
        if ($this->compte->contains($compte)) {
            $this->compte->removeElement($compte);
            // set the owning side to null (unless already changed)
            if ($compte->getEntreprise() === $this) {
                $compte->setEntreprise(null);
            }
        }

        return $this;
    }
}
