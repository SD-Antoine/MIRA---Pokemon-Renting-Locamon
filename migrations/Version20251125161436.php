<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251125161436 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, role_id INT NOT NULL, username VARCHAR(255) NOT NULL, mail VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, INDEX IDX_8D93D649D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE locamon CHANGE level level INT UNSIGNED NOT NULL, CHANGE iv_hp iv_hp INT UNSIGNED DEFAULT NULL, CHANGE iv_atk iv_atk INT UNSIGNED DEFAULT NULL, CHANGE iv_sp_atk iv_sp_atk INT UNSIGNED DEFAULT NULL, CHANGE iv_def iv_def INT UNSIGNED DEFAULT NULL, CHANGE iv_sp_def iv_sp_def INT UNSIGNED DEFAULT NULL, CHANGE iv_spd iv_spd INT UNSIGNED DEFAULT NULL, CHANGE ev_hp ev_hp INT UNSIGNED DEFAULT NULL, CHANGE ev_atk ev_atk INT UNSIGNED DEFAULT NULL, CHANGE ev_sp_atk ev_sp_atk INT UNSIGNED DEFAULT NULL, CHANGE ev_def ev_def INT UNSIGNED DEFAULT NULL, CHANGE ev_sp_def ev_sp_def INT UNSIGNED DEFAULT NULL, CHANGE ev_spd ev_spd INT UNSIGNED DEFAULT NULL, CHANGE price price INT UNSIGNED DEFAULT NULL, CHANGE stock stock INT UNSIGNED DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE locamon CHANGE iv_atk iv_atk INT DEFAULT NULL, CHANGE iv_sp_atk iv_sp_atk INT DEFAULT NULL, CHANGE iv_spd iv_spd INT DEFAULT NULL, CHANGE iv_def iv_def INT DEFAULT NULL, CHANGE iv_sp_def iv_sp_def INT DEFAULT NULL, CHANGE iv_hp iv_hp INT DEFAULT NULL, CHANGE ev_atk ev_atk INT DEFAULT NULL, CHANGE ev_sp_atk ev_sp_atk INT DEFAULT NULL, CHANGE ev_def ev_def INT DEFAULT NULL, CHANGE ev_sp_def ev_sp_def INT DEFAULT NULL, CHANGE ev_spd ev_spd INT DEFAULT NULL, CHANGE ev_hp ev_hp INT DEFAULT NULL, CHANGE price price INT DEFAULT NULL, CHANGE stock stock INT DEFAULT NULL, CHANGE level level INT NOT NULL');
    }
}
