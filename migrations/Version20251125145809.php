<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251125145809 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE locamon (id INT NOT NULL, nickname VARCHAR(255) DEFAULT NULL, iv_atk INT DEFAULT NULL, iv_sp_atk INT DEFAULT NULL, iv_spd INT DEFAULT NULL, iv_def INT DEFAULT NULL, iv_sp_def INT DEFAULT NULL, iv_hp INT DEFAULT NULL, ev_atk INT DEFAULT NULL, ev_sp_atk INT DEFAULT NULL, ev_def INT DEFAULT NULL, ev_sp_def INT DEFAULT NULL, ev_spd INT DEFAULT NULL, ev_hp INT DEFAULT NULL, price INT DEFAULT NULL, stock INT DEFAULT NULL, level INT NOT NULL, nature VARCHAR(255) NOT NULL, shiny TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE locamon ADD CONSTRAINT FK_7DB0BADFBF396750 FOREIGN KEY (id) REFERENCES pokemon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pokemon ADD dtype VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locamon DROP FOREIGN KEY FK_7DB0BADFBF396750');
        $this->addSql('DROP TABLE locamon');
        $this->addSql('ALTER TABLE pokemon DROP dtype');
    }
}
