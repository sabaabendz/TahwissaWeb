<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260427215642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // We only add the missing columns to avoid conflicts with existing manual DB relations
        $this->addSql('ALTER TABLE user ADD google_id VARCHAR(191) DEFAULT NULL, ADD github_id VARCHAR(191) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement CHANGE promo_percent promo_percent SMALLINT DEFAULT NULL COMMENT \'Reduction en pourcentage 1-100, NULL si aucune promo\'');
        $this->addSql('ALTER TABLE point_interet DROP FOREIGN KEY FK_1E559669816C6140');
        $this->addSql('DROP INDEX idx_1e559669816c6140 ON point_interet');
        $this->addSql('CREATE INDEX destination_id ON point_interet (destination_id)');
        $this->addSql('ALTER TABLE point_interet ADD CONSTRAINT FK_1E559669816C6140 FOREIGN KEY (destination_id) REFERENCES destination (id_destination)');
        $this->addSql('ALTER TABLE reservationvoyage DROP FOREIGN KEY FK_F6DAB56E19AA3CB8');
        $this->addSql('ALTER TABLE reservationvoyage DROP FOREIGN KEY FK_F6DAB56E19AA3CB8');
        $this->addSql('ALTER TABLE reservationvoyage CHANGE date_reservation date_reservation DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE statut statut ENUM(\'EN_ATTENTE\', \'CONFIRMEE\', \'ANNULEE\', \'TERMINEE\') DEFAULT \'EN_ATTENTE\' NOT NULL, CHANGE nbrPersonnes nbrPersonnes INT DEFAULT 1 NOT NULL, CHANGE montantTotal montantTotal NUMERIC(10, 2) DEFAULT \'10.20\' NOT NULL, CHANGE dateCreation dateCreation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('DROP INDEX idx_f6dab56e19aa3cb8 ON reservationvoyage');
        $this->addSql('CREATE INDEX idDestination ON reservationvoyage (id_voyage)');
        $this->addSql('ALTER TABLE reservationvoyage ADD CONSTRAINT FK_F6DAB56E19AA3CB8 FOREIGN KEY (id_voyage) REFERENCES voyage (id)');
        $this->addSql('CREATE INDEX idx_reservation_evenement_stripe_session ON reservation_evenement (stripe_checkout_session_id)');
        $this->addSql('ALTER TABLE role CHANGE name name VARCHAR(20) NOT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX uniq_57698a6a5e237e06 ON role');
        $this->addSql('CREATE UNIQUE INDEX name ON role (name)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('ALTER TABLE user DROP google_id, DROP github_id, CHANGE description description TEXT DEFAULT NULL, CHANGE is_verified is_verified TINYINT(1) DEFAULT 0, CHANGE is_active is_active TINYINT(1) DEFAULT 1, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE role_id role_id INT DEFAULT 1');
        $this->addSql('DROP INDEX uniq_8d93d649e7927c74 ON user');
        $this->addSql('CREATE UNIQUE INDEX email ON user (email)');
        $this->addSql('DROP INDEX idx_8d93d649d60322ac ON user');
        $this->addSql('CREATE INDEX role_id ON user (role_id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE utilisateur CHANGE role role VARCHAR(50) DEFAULT \'USER\'');
        $this->addSql('CREATE UNIQUE INDEX email ON utilisateur (email)');
        $this->addSql('ALTER TABLE voyage CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE updated_at updated_at DATETIME DEFAULT CURRENT_TIMESTAMP');
    }
}
