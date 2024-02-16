<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230611102042 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clients (id INT NOT NULL, roles JSON NOT NULL, email VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, reset_token VARCHAR(250) DEFAULT NULL, nom VARCHAR(50) NOT NULL, numero_telephone VARCHAR(20) NOT NULL, adresse_facturation VARCHAR(100) DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_C82E74E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commandes (id INT NOT NULL, client_id INT NOT NULL, note_id INT DEFAULT NULL, date_commande DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', creneau DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', statut VARCHAR(255) NOT NULL, preference_creneau VARCHAR(255) NOT NULL, date_paiement DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', date_remboursement DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', date_ouverture_paiement DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', date_livraison DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', formule_id INT DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, localisation_commande VARCHAR(255) DEFAULT NULL, nb_photos_commande VARCHAR(255) DEFAULT NULL, aide_integration_commande TINYINT(1) DEFAULT NULL, is_abonnement_active TINYINT(1) DEFAULT NULL, adresse_rdv VARCHAR(255) DEFAULT NULL, preference_contact VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_35D4282CF9668B5F (creneau), INDEX IDX_35D4282C19EB6921 (client_id), UNIQUE INDEX UNIQ_35D4282C26ED0855 (note_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formules (id INT AUTO_INCREMENT NOT NULL, nom_commercial VARCHAR(255) NOT NULL, delai_livraison_heure INT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notes (id INT AUTO_INCREMENT NOT NULL, note INT NOT NULL, commentaire VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, consent TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_token (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282C19EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE commandes ADD CONSTRAINT FK_35D4282C26ED0855 FOREIGN KEY (note_id) REFERENCES notes (id)');
        $this->addSql('DROP TABLE test');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test (test INT NOT NULL) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282C19EB6921');
        $this->addSql('ALTER TABLE commandes DROP FOREIGN KEY FK_35D4282C26ED0855');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE commandes');
        $this->addSql('DROP TABLE formules');
        $this->addSql('DROP TABLE notes');
        $this->addSql('DROP TABLE user_token');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
