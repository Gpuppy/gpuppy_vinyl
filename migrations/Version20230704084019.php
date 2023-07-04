<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230704084019 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX artist_id ON vinyl');
        $this->addSql('CREATE INDEX IDX_E2E531DB7970CF8 ON vinyl (artist_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl DROP FOREIGN KEY FK_E2E531DB7970CF8');
        $this->addSql('ALTER TABLE vinyl DROP FOREIGN KEY FK_E2E531DB7970CF8');
        $this->addSql('DROP INDEX idx_e2e531db7970cf8 ON vinyl');
        $this->addSql('CREATE INDEX artist_id ON vinyl (artist_id)');
        $this->addSql('ALTER TABLE vinyl ADD CONSTRAINT FK_E2E531DB7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
    }
}
