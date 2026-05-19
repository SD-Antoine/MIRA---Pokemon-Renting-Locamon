<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251114092625 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pokemon_translation (id INT AUTO_INCREMENT NOT NULL, pokemon_id INT NOT NULL, lang VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_3768FCC42FE71C3E (pokemon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pokemon_translation ADD CONSTRAINT FK_3768FCC42FE71C3E FOREIGN KEY (pokemon_id) REFERENCES pokemon (id)');
        $this->addSql('ALTER TABLE translation DROP FOREIGN KEY FK_B469456F2FE71C3E');
        $this->addSql('DROP TABLE translation');
        $this->addSql('ALTER TABLE sprite DROP FOREIGN KEY FK_351D8F9E2FE71C3E');
        $this->addSql('ALTER TABLE sprite ADD CONSTRAINT FK_351D8F9E2FE71C3E FOREIGN KEY (pokemon_id) REFERENCES pokemon (id)');
        $this->addSql('ALTER TABLE type ADD name_en VARCHAR(255) NOT NULL, CHANGE name name_fr VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE translation (id INT AUTO_INCREMENT NOT NULL, pokemon_id INT NOT NULL, lang VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_B469456F2FE71C3E (pokemon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE translation ADD CONSTRAINT FK_B469456F2FE71C3E FOREIGN KEY (pokemon_id) REFERENCES pokemon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pokemon_translation DROP FOREIGN KEY FK_3768FCC42FE71C3E');
        $this->addSql('DROP TABLE pokemon_translation');
        $this->addSql('ALTER TABLE sprite DROP FOREIGN KEY FK_351D8F9E2FE71C3E');
        $this->addSql('ALTER TABLE sprite ADD CONSTRAINT FK_351D8F9E2FE71C3E FOREIGN KEY (pokemon_id) REFERENCES pokemon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE type ADD name VARCHAR(255) NOT NULL, DROP name_fr, DROP name_en');
    }
}
