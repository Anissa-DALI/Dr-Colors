<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211014205255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE prive');
        $this->addSql('ALTER TABLE personne ADD ville LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE professionnels ADD telecharger_photo_id INT DEFAULT NULL, DROP telecharger_photo, CHANGE societe_name societe_name VARCHAR(255) DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE code_postal code_postal INT DEFAULT NULL, CHANGE ville ville VARCHAR(255) DEFAULT NULL, CHANGE accessibilite accessibilite LONGTEXT DEFAULT NULL, CHANGE etat_mur etat_mur LONGTEXT DEFAULT NULL, CHANGE superficie superficie INT DEFAULT NULL, CHANGE hauteur_max hauteur_max INT DEFAULT NULL');
        $this->addSql('ALTER TABLE professionnels ADD CONSTRAINT FK_8BCBFA5BC863D629 FOREIGN KEY (telecharger_photo_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8BCBFA5BC863D629 ON professionnels (telecharger_photo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prive (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE personne DROP ville');
        $this->addSql('ALTER TABLE professionnels DROP FOREIGN KEY FK_8BCBFA5BC863D629');
        $this->addSql('DROP INDEX UNIQ_8BCBFA5BC863D629 ON professionnels');
        $this->addSql('ALTER TABLE professionnels ADD telecharger_photo LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP telecharger_photo_id, CHANGE societe_name societe_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE code_postal code_postal INT NOT NULL, CHANGE ville ville VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE accessibilite accessibilite LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE etat_mur etat_mur LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE superficie superficie INT NOT NULL, CHANGE hauteur_max hauteur_max INT NOT NULL');
    }
}
