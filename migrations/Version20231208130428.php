<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231208130428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livres ADD image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE livres ADD CONSTRAINT FK_927187A460BB6FE6 FOREIGN KEY (auteur_id) REFERENCES auteur (id)');
        $this->addSql('ALTER TABLE livres ADD CONSTRAINT FK_927187A43375BD21 FOREIGN KEY (editeur_id) REFERENCES editeur (id)');
        $this->addSql('CREATE INDEX IDX_927187A460BB6FE6 ON livres (auteur_id)');
        $this->addSql('CREATE INDEX IDX_927187A43375BD21 ON livres (editeur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livres DROP FOREIGN KEY FK_927187A460BB6FE6');
        $this->addSql('ALTER TABLE livres DROP FOREIGN KEY FK_927187A43375BD21');
        $this->addSql('DROP INDEX IDX_927187A460BB6FE6 ON livres');
        $this->addSql('DROP INDEX IDX_927187A43375BD21 ON livres');
        $this->addSql('ALTER TABLE livres DROP image');
    }
}
