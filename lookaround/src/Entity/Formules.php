<?php

namespace App\Entity;

use App\Repository\FormulesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Collection;


#[ORM\Entity(repositoryClass: FormulesRepository::class)]
class Formules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(unique: true)]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $nomCommercial = null;

    #[ORM\Column]
    private ?int $delai_livraison_heure = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    /*
    #[ORM\OneToMany(targetEntity: Commandes::class, mappedBy: "formules")]
    private $commandes;
    */

    public function __construct()
    {
        // $this->commandes = new ArrayCollection();
    }

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

    public function getNomCommercial(): ?string
    {
        return $this->nomCommercial;
    }

    public function setNomCommercial(string $nomCommercial): self
    {
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    public function getDelaiLivraisonHeure(): ?int
    {
        return $this->delai_livraison_heure;
    }

    public function setDelaiLivraisonHeure(int $delai_livraison_heure): self
    {
        $this->delai_livraison_heure = $delai_livraison_heure;

        return $this;
    }

    /*
    public function getCommandes()
    {

        return $this->commandes;
    }

    public function setCommandes(Commandes $commandes): self
    {
        $this->commandes = $commandes;

        return $this;
    }

    */
}
