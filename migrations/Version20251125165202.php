<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251125165202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locamon DROP FOREIGN KEY FK_7DB0BADFBF396750');
        $this->addSql('ALTER TABLE locamon ADD pokemon_id INT NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE locamon ADD CONSTRAINT FK_7DB0BADF2FE71C3E FOREIGN KEY (pokemon_id) REFERENCES pokemon (id)');
        $this->addSql('CREATE INDEX IDX_7DB0BADF2FE71C3E ON locamon (pokemon_id)');
        $this->addSql('ALTER TABLE pokemon DROP discr');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon ADD discr VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE locamon DROP FOREIGN KEY FK_7DB0BADF2FE71C3E');
        $this->addSql('DROP INDEX IDX_7DB0BADF2FE71C3E ON locamon');
        $this->addSql('ALTER TABLE locamon DROP pokemon_id, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE locamon ADD CONSTRAINT FK_7DB0BADFBF396750 FOREIGN KEY (id) REFERENCES pokemon (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
