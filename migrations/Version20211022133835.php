<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211022133835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(255) DEFAULT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personne (id INT AUTO_INCREMENT NOT NULL, civilites VARCHAR(20) NOT NULL, nom VARCHAR(20) NOT NULL, prenom VARCHAR(20) NOT NULL, telephone VARCHAR(20) NOT NULL, email VARCHAR(20) NOT NULL, realisation VARCHAR(255) DEFAULT NULL, ville LONGTEXT NOT NULL, message LONGTEXT NOT NULL, rgpd TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE login ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', CHANGE login login VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_AA08CB10AA08CB10 ON login (login)');
        $this->addSql('ALTER TABLE professionnels ADD telecharger_photo_id INT DEFAULT NULL, DROP telecharger_photo, CHANGE societe_name societe_name VARCHAR(255) DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE code_postal code_postal INT DEFAULT NULL, CHANGE ville ville VARCHAR(255) DEFAULT NULL, CHANGE accessibilite accessibilite LONGTEXT DEFAULT NULL, CHANGE etat_mur etat_mur LONGTEXT DEFAULT NULL, CHANGE superficie superficie INT DEFAULT NULL, CHANGE hauteur_max hauteur_max INT DEFAULT NULL');
        $this->addSql('ALTER TABLE professionnels ADD CONSTRAINT FK_8BCBFA5BC863D629 FOREIGN KEY (telecharger_photo_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8BCBFA5BC863D629 ON professionnels (telecharger_photo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE professionnels DROP FOREIGN KEY FK_8BCBFA5BC863D629');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE personne');
        $this->addSql('DROP INDEX UNIQ_AA08CB10AA08CB10 ON login');
        $this->addSql('ALTER TABLE login DROP roles, CHANGE login login VARCHAR(15) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX UNIQ_8BCBFA5BC863D629 ON professionnels');
        $this->addSql('ALTER TABLE professionnels ADD telecharger_photo LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP telecharger_photo_id, CHANGE societe_name societe_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE code_postal code_postal INT NOT NULL, CHANGE ville ville VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE accessibilite accessibilite LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE etat_mur etat_mur LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE superficie superficie INT NOT NULL, CHANGE hauteur_max hauteur_max INT NOT NULL');
    }
}
