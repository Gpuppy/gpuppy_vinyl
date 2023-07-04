<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230702200005 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE title title VARCHAR(255) NOT NULL, CHANGE slug slug VARCHAR(255) NOT NULL, CHANGE content content LONGTEXT NOT NULL, CHANGE attachment attachment VARCHAR(255) NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE INDEX IDX_E2E531DB7970CF8 ON vinyl (artist_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE vinyl DROP FOREIGN KEY FK_E2E531DB7970CF8');
        $this->addSql('DROP INDEX IDX_E2E531DB7970CF8 ON vinyl');
        $this->addSql('DROP INDEX `primary` ON vinyl');
        $this->addSql('ALTER TABLE vinyl CHANGE id id INT NOT NULL, CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE slug slug VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE content content VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE attachment attachment VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
