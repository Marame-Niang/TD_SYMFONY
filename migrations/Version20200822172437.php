<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200822172437 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clear (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(50) NOT NULL, telephone VARCHAR(70) NOT NULL, cni INT NOT NULL, date_naissance DATE NOT NULL, matricule VARCHAR(50) NOT NULL, sexe VARCHAR(50) NOT NULL, adresse VARCHAR(100) NOT NULL, email VARCHAR(50) DEFAULT NULL, raison_sociale VARCHAR(50) DEFAULT NULL, salaire INT DEFAULT NULL, nom_employeur VARCHAR(20) DEFAULT NULL, adr_employeur VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, cni VARCHAR(50) NOT NULL, matricule VARCHAR(50) NOT NULL, sexe VARCHAR(50) NOT NULL, datenaiss DATE NOT NULL, telephone VARCHAR(50) NOT NULL, adresse VARCHAR(50) NOT NULL, email VARCHAR(20) DEFAULT NULL, raison_sociale VARCHAR(30) DEFAULT NULL, salaire INT DEFAULT NULL, nom_employeur VARCHAR(40) DEFAULT NULL, adr_employeur VARCHAR(30) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, type_compte_id INT DEFAULT NULL, numero INT NOT NULL, rib INT NOT NULL, solde INT NOT NULL, date_ouv VARCHAR(255) DEFAULT NULL, frais_ouv INT DEFAULT NULL, remuneration INT DEFAULT NULL, date_debut VARCHAR(255) DEFAULT NULL, date_fin VARCHAR(255) DEFAULT NULL, agios VARCHAR(50) NOT NULL, INDEX IDX_CFF6526019EB6921 (client_id), INDEX IDX_CFF6526046032730 (type_compte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, nom_entreprise VARCHAR(50) NOT NULL, tel_entreprise VARCHAR(50) NOT NULL, email_entreprise VARCHAR(50) NOT NULL, budget_entreprise VARCHAR(50) NOT NULL, adr_entreprise VARCHAR(50) NOT NULL, login VARCHAR(50) DEFAULT NULL, password VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_compte (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF6526019EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF6526046032730 FOREIGN KEY (type_compte_id) REFERENCES type_compte (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF6526019EB6921');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF6526046032730');
        $this->addSql('DROP TABLE clear');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE compte');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE type_compte');
    }
}
