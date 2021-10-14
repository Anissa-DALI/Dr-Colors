<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211013212117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE professionnels ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE professionnels ADD CONSTRAINT FK_8BCBFA5B3DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8BCBFA5B3DA5256D ON professionnels (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE professionnels DROP FOREIGN KEY FK_8BCBFA5B3DA5256D');
        $this->addSql('DROP INDEX UNIQ_8BCBFA5B3DA5256D ON professionnels');
        $this->addSql('ALTER TABLE professionnels DROP image_id');
    }
}
