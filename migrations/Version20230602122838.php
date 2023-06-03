<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230602122838 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl DROP FOREIGN KEY FK_E2E531D21D25844');
        $this->addSql('DROP INDEX IDX_E2E531D21D25844 ON vinyl');
        $this->addSql('ALTER TABLE vinyl CHANGE title title VARCHAR(255) NOT NULL, CHANGE slug slug VARCHAR(255) NOT NULL, CHANGE content content LONGTEXT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE attachment attachment VARCHAR(255) NOT NULL, CHANGE artiste_id artist_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vinyl ADD CONSTRAINT FK_E2E531DB7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
        $this->addSql('CREATE INDEX IDX_E2E531DB7970CF8 ON vinyl (artist_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl DROP FOREIGN KEY FK_E2E531DB7970CF8');
        $this->addSql('DROP INDEX IDX_E2E531DB7970CF8 ON vinyl');
        $this->addSql('ALTER TABLE vinyl CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL, CHANGE content content LONGTEXT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE attachment attachment VARCHAR(255) DEFAULT NULL, CHANGE artist_id artiste_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vinyl ADD CONSTRAINT FK_E2E531D21D25844 FOREIGN KEY (artiste_id) REFERENCES artist (id)');
        $this->addSql('CREATE INDEX IDX_E2E531D21D25844 ON vinyl (artiste_id)');
    }
}
