<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use DateTime;
use DateTimeImmutable;
use DateTimeZone;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use App\Entity\Formules;

#[ORM\Entity(repositoryClass: CommandesRepository::class)]
class Commandes
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "CUSTOM")]
    #[ORM\CustomIdGenerator(class: "App\Generator\IdGenerator")]
    #[ORM\Column(unique: true)]
    private ?int $id = null;

    #[ORM\Column(options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeImmutable $date_commande = null;

    #[ORM\Column(unique: true, nullable: true)]
    private ?\DateTimeImmutable $creneau = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;


    #[ORM\Column(nullable: false, length: 255)]
    private ?string $preference_creneau = null;



    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $date_paiement = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $date_remboursement = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $date_ouverture_paiement = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $date_livraison = null;

    #[ORM\Column(nullable: true)]
    private ?int $formule_id;

    #[ORM\Column(nullable: true)]
    private ?float $prix;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $localisation_commande = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nb_photos_commande = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?bool $aide_integration_commande = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?bool $is_abonnement_active = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse_rdv = null;

    #[ORM\Column(length: 255,  nullable: false)]
    private ?string $preference_contact = null;

    #[ORM\ManyToOne(targetEntity: "App\Entity\Clients", inversedBy: "commandes")]
    #[ORM\JoinColumn(name: "client_id", referencedColumnName: "id", nullable: false)]
    private ?Clients $client = null;

    /*
    #[ORM\ManyToOne(targetEntity: Formules::class, inversedBy: "commandes")]
    //#[ORM\JoinColumn(name: "formule_id", referencedColumnName: "id", nullable: false)]
    private Formules $formule;
*/
    #[ORM\OneToOne(targetEntity: Notes::class)]
    private $note;



    public function __construct()
    {
        $timezone = new DateTimeZone('Europe/Paris');
        $this->date_commande = new DateTimeImmutable('now', $timezone);

        $this->creneau = null;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeImmutable
    {
        return $this->date_commande;
    }

    public function setDateCommande(\DateTimeImmutable $date_commande): self
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }


    public function getNbPhotosCommande(): ?string
    {
        return $this->nb_photos_commande;
    }

    public function setNbPhotosCommande(string $nb_photos_commande): self
    {
        $this->nb_photos_commande = $nb_photos_commande;
        return $this;
    }

    public function getLocalisationCommande(): ?string
    {
        return $this->localisation_commande;
    }

    public function setLocalisationCommande(string $localisation_commande): self
    {
        $this->localisation_commande = $localisation_commande;
        return $this;
    }


    public function getAideIntegrationCommande(): ?bool
    {
        return $this->aide_integration_commande;
    }

    public function setAideIntegrationCommande(bool $aide_integration_commande): self
    {
        $this->aide_integration_commande = $aide_integration_commande;
        return $this;
    }


    public function getIsAbonnementActive(): ?bool
    {
        return $this->is_abonnement_active;
    }

    public function setIsAbonnementActive(bool $is_abonnement_active): self
    {
        $this->is_abonnement_active = $is_abonnement_active;
        return $this;
    }


    public function getCreneau(): ?\DateTimeImmutable
    {
        return $this->creneau;
    }

    public function setCreneau(?\DateTimeImmutable $creneau): self
    {
        $this->creneau = $creneau;

        return $this;
    }


    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note): self
    {
        $this->note = $note;
        return $this;
    }



    public function getPreferenceCreneau(): ?string
    {
        return $this->preference_creneau;
    }

    public function setPreferenceCreneau(string $preference_creneau): self
    {
        $this->preference_creneau = $preference_creneau;

        return $this;
    }


    public function getDateLivraison(): ?\DateTimeImmutable
    {
        return $this->date_livraison;
    }

    public function setDateLivraison(?\DateTimeImmutable $date_livraison): self
    {
        $this->date_livraison = $date_livraison;

        return $this;
    }


    public function getDateOuverturePaiement(): ?\DateTimeImmutable
    {
        return $this->date_ouverture_paiement;
    }

    public function setDateOuverturePaiement(?\DateTimeImmutable $date_ouverture_paiement): self
    {
        $this->date_ouverture_paiement = $date_ouverture_paiement;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeImmutable
    {
        return $this->date_paiement;
    }

    public function setDatePaiement(?\DateTimeImmutable $date_paiement): self
    {
        $this->date_paiement = $date_paiement;

        return $this;
    }


    public function getDateRemboursement(): ?\DateTimeImmutable
    {
        return $this->date_remboursement;
    }

    public function setDateRemboursement(?\DateTimeImmutable $date_remboursement): self
    {
        $this->date_remboursement = $date_remboursement;

        return $this;
    }



    public function getFormuleId(): ?int
    {
        return $this->formule_id;
    }

    public function setFormuleId(int $formule_id): self
    {
        $this->formule_id = $formule_id;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }

    /*
    public function getFormules(): ?Formules
    {
        return $this->formule;
    }

    public function setFormules(Formules $formule): self
    {
        $this->formule = $formule;

        return $this;
    }
*/


    public function getPreferenceContact(): ?string
    {
        return $this->preference_contact;
    }

    public function setPreferenceContact(string $preference_contact): self
    {
        $this->preference_contact = $preference_contact;

        return $this;
    }

    public function getAdresseRdv(): ?string
    {
        return $this->adresse_rdv;
    }

    public function setAdresseRdv(string $adresse_rdv): self
    {
        $this->adresse_rdv = $adresse_rdv;

        return $this;
    }

    public function getTempsRestantes(): ?string
    {
        $date1 = new DateTimeImmutable($this->creneau->format("Y-m-d H:i:s"), new DateTimeZone('Europe/Paris'));
        $date2 = new DateTimeImmutable("now", new DateTimeZone('Europe/Paris'));

        $interval = $date1->diff($date2);
        $result = "";

        if ($interval->days > 0)
            $result = $interval->days . " jours";
        else if ($interval->h > 0)
            $result = $interval->h . " heures";
        else
            $result = $interval->i . " minutes";

        if ($date1 > $date2) {
            return  'aura lieu dans ' . $result;
        } else {
            return  'a eu lieu il y a ' . $result;
        }
    }

    public function getJoursRestantes(): ?int
    {
        if ($this->creneau != null) {
            $date1 = new DateTimeImmutable($this->creneau->format("Y-m-d H:i:s"), new DateTimeZone('Europe/Paris'));
            $date2 = new DateTimeImmutable("now", new DateTimeZone('Europe/Paris'));

            $interval = $date1->diff($date2);
            $hours = $interval->days;

            if ($date1 > $date2) {
                return  $hours;
            } else {
                return  $hours;
            }
        } else {
            return 0;
        }
    }


    public function getIsRemboursed(): ?int
    {
        if ($this->date_remboursement != null) {
            $date1 = new DateTimeImmutable($this->date_remboursement->format("Y-m-d H:i:s"), new DateTimeZone('Europe/Paris'));
            $date2 = new DateTimeImmutable("now", new DateTimeZone('Europe/Paris'));

            if ($date1 > $date2) {
                return 0;
            } else {
                $interval = $date1->diff($date2);
                $hours = $interval->h + + ($interval->days * 24);
                return $hours;
            }
        } else {
            return 0;
        }
    }


    public function getClientId(): ?Clients
    {
        return $this->client;
    }

    public function setClientId(?Clients $client): self
    {
        $this->client = $client;
        return $this;
    }
}
