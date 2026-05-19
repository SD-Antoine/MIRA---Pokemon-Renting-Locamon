<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251112132456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon CHANGE type1 type1 INT NOT NULL, CHANGE type2 type2 INT NOT NULL');
        $this->addSql('ALTER TABLE translation DROP FOREIGN KEY FK_B469456F90AD2703');
        $this->addSql('DROP INDEX IDX_B469456F90AD2703 ON translation');
        $this->addSql('ALTER TABLE translation CHANGE pokemon_id pokemon_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE translation ADD CONSTRAINT FK_B469456F90AD2703 FOREIGN KEY (pokemon_id_id) REFERENCES pokemon (id)');
        $this->addSql('CREATE INDEX IDX_B469456F90AD2703 ON translation (pokemon_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon CHANGE type1 type1 VARCHAR(255) NOT NULL, CHANGE type2 type2 VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE translation DROP FOREIGN KEY FK_B469456F90AD2703');
        $this->addSql('DROP INDEX IDX_B469456F90AD2703 ON translation');
        $this->addSql('ALTER TABLE translation CHANGE pokemon_id_id pokemon_id INT NOT NULL');
        $this->addSql('ALTER TABLE translation ADD CONSTRAINT FK_B469456F90AD2703 FOREIGN KEY (pokemon_id) REFERENCES pokemon (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_B469456F90AD2703 ON translation (pokemon_id)');
    }
}
