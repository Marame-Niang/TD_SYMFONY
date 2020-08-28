<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="integer", length=50)
     */
    private $rib;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateOuv;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fraisOuv;

    /**
     * @ORM\Column(type="integer", length=50, nullable=true)
     */
    private $remuneration;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $date_debut;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $date_fin;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $agios;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="compte")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=TypeCompte::class, inversedBy="compte")
     */
    private $typeCompte;

    /**
     * @ORM\ManyToOne(targetEntity=Entreprise::class, inversedBy="compte")
     */
    private $entreprise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(?string $rib): self
    {
        $this->rib = $rib;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDateOuv(): string
    {
        return $this->dateOuv;
    }

    public function setDateOuv(string $dateOuv): self
    {
        $this->dateOuv = $dateOuv;

        return $this;
    }

    public function getFraisOuv(): ?int
    {
        return $this->fraisOuv;
    }

    public function setFraisOuv(?int $fraisOuv): self
    {
        $this->fraisOuv = $fraisOuv;

        return $this;
    }

    public function getRemuneration(): ?string
    {
        return $this->remuneration;
    }

    public function setRemuneration(?string $remuneration): self
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function getDateDebut()
    {
        return $this->date_debut;
    }

    public function setDateDebut(?string $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin()
    {
        return $this->date_fin;
    }

    public function setDateFin(?string $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getAgios(): ?string
    {
        return $this->agios;
    }

    public function setAgios(string $agios): self
    {
        $this->agios = $agios;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getTypeCompte(): ?TypeCompte
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(?TypeCompte $typeCompte): self
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }
}
