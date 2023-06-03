<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230602093322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl ADD artiste_id INT DEFAULT NULL, ADD slug VARCHAR(255) NOT NULL, ADD content LONGTEXT NOT NULL, ADD price DOUBLE PRECISION NOT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME DEFAULT NULL, ADD attachment VARCHAR(255) NOT NULL, CHANGE title title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE vinyl ADD CONSTRAINT FK_E2E531D21D25844 FOREIGN KEY (artiste_id) REFERENCES artist (id)');
        $this->addSql('CREATE INDEX IDX_E2E531D21D25844 ON vinyl (artiste_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl DROP FOREIGN KEY FK_E2E531D21D25844');
        $this->addSql('DROP INDEX IDX_E2E531D21D25844 ON vinyl');
        $this->addSql('ALTER TABLE vinyl DROP artiste_id, DROP slug, DROP content, DROP price, DROP created_at, DROP updated_at, DROP attachment, CHANGE title title TEXT NOT NULL');
    }
}
