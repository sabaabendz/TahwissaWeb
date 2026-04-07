<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260407050534 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement ADD image_filename VARCHAR(255) DEFAULT NULL, ADD date_creation DATETIME DEFAULT NULL, CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY fk_reclamation_user');
        $this->addSql('DROP INDEX id_user ON reclamation');
        $this->addSql('ALTER TABLE reclamation CHANGE description description LONGTEXT NOT NULL, CHANGE date_creation date_creation DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation_evenement DROP FOREIGN KEY fk_reservation_evenement_user');
        $this->addSql('DROP INDEX id_user ON reservation_evenement');
        $this->addSql('ALTER TABLE reservation_evenement DROP FOREIGN KEY fk_reservation_evenement_evenement');
        $this->addSql('DROP INDEX id_evenement ON reservation_evenement');
        $this->addSql('CREATE INDEX IDX_116109818B13D439 ON reservation_evenement (id_evenement)');
        $this->addSql('ALTER TABLE reservation_evenement ADD CONSTRAINT fk_reservation_evenement_evenement FOREIGN KEY (id_evenement) REFERENCES evenement (id_evenement) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservationvoyage DROP FOREIGN KEY fk_reservation_voyage');
        $this->addSql('DROP INDEX idUtilisateur ON reservationvoyage');
        $this->addSql('ALTER TABLE reservationvoyage DROP FOREIGN KEY fk_reservation_voyage');
        $this->addSql('ALTER TABLE reservationvoyage CHANGE date_reservation date_reservation DATETIME DEFAULT NULL, CHANGE statut statut VARCHAR(20) NOT NULL, CHANGE nbrPersonnes nbrPersonnes INT NOT NULL, CHANGE montantTotal montantTotal NUMERIC(10, 2) NOT NULL, CHANGE dateCreation dateCreation DATETIME NOT NULL');
        $this->addSql('ALTER TABLE reservationvoyage ADD CONSTRAINT FK_F6DAB56E19AA3CB8 FOREIGN KEY (id_voyage) REFERENCES voyage (id)');
        $this->addSql('DROP INDEX iddestination ON reservationvoyage');
        $this->addSql('CREATE INDEX IDX_F6DAB56E19AA3CB8 ON reservationvoyage (id_voyage)');
        $this->addSql('ALTER TABLE reservationvoyage ADD CONSTRAINT fk_reservation_voyage FOREIGN KEY (id_voyage) REFERENCES voyage (id) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE role CHANGE name name VARCHAR(50) NOT NULL, CHANGE description description VARCHAR(200) DEFAULT NULL');
        $this->addSql('DROP INDEX name ON role');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_57698A6A5E237E06 ON role (name)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY user_ibfk_1');
        $this->addSql('ALTER TABLE user CHANGE description description LONGTEXT DEFAULT NULL, CHANGE is_verified is_verified TINYINT(1) DEFAULT 0 NOT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT 1 NOT NULL, CHANGE role_id role_id INT DEFAULT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL');
        $this->addSql('DROP INDEX email ON user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('DROP INDEX role_id ON user');
        $this->addSql('CREATE INDEX IDX_8D93D649D60322AC ON user (role_id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT user_ibfk_1 FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('DROP INDEX email ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur CHANGE role role VARCHAR(50) DEFAULT \'USER\' NOT NULL');
        $this->addSql('ALTER TABLE voyage CHANGE description description LONGTEXT DEFAULT NULL, CHANGE places_disponibles places_disponibles INT NOT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP image_filename, DROP date_creation, CHANGE description description TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE description description TEXT NOT NULL, CHANGE date_creation date_creation DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT fk_reclamation_user FOREIGN KEY (id_user) REFERENCES utilisateur (id_user) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX id_user ON reclamation (id_user)');
        $this->addSql('ALTER TABLE reservationvoyage DROP FOREIGN KEY FK_F6DAB56E19AA3CB8');
        $this->addSql('ALTER TABLE reservationvoyage DROP FOREIGN KEY FK_F6DAB56E19AA3CB8');
        $this->addSql('ALTER TABLE reservationvoyage CHANGE date_reservation date_reservation DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE statut statut ENUM(\'EN_ATTENTE\', \'CONFIRMEE\', \'ANNULEE\', \'TERMINEE\') DEFAULT \'EN_ATTENTE\' NOT NULL, CHANGE nbrPersonnes nbrPersonnes INT DEFAULT 1 NOT NULL, CHANGE montantTotal montantTotal NUMERIC(10, 2) DEFAULT \'10.20\' NOT NULL, CHANGE dateCreation dateCreation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE reservationvoyage ADD CONSTRAINT fk_reservation_voyage FOREIGN KEY (id_voyage) REFERENCES voyage (id) ON UPDATE CASCADE');
        $this->addSql('CREATE INDEX idUtilisateur ON reservationvoyage (idUtilisateur)');
        $this->addSql('DROP INDEX idx_f6dab56e19aa3cb8 ON reservationvoyage');
        $this->addSql('CREATE INDEX idDestination ON reservationvoyage (id_voyage)');
        $this->addSql('ALTER TABLE reservationvoyage ADD CONSTRAINT FK_F6DAB56E19AA3CB8 FOREIGN KEY (id_voyage) REFERENCES voyage (id)');
        $this->addSql('ALTER TABLE reservation_evenement DROP FOREIGN KEY FK_116109818B13D439');
        $this->addSql('ALTER TABLE reservation_evenement ADD CONSTRAINT fk_reservation_evenement_user FOREIGN KEY (id_user) REFERENCES utilisateur (id_user) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX id_user ON reservation_evenement (id_user)');
        $this->addSql('DROP INDEX idx_116109818b13d439 ON reservation_evenement');
        $this->addSql('CREATE INDEX id_evenement ON reservation_evenement (id_evenement)');
        $this->addSql('ALTER TABLE reservation_evenement ADD CONSTRAINT FK_116109818B13D439 FOREIGN KEY (id_evenement) REFERENCES evenement (id_evenement) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role CHANGE name name VARCHAR(20) NOT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('DROP INDEX uniq_57698a6a5e237e06 ON role');
        $this->addSql('CREATE UNIQUE INDEX name ON role (name)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('ALTER TABLE user CHANGE description description TEXT DEFAULT NULL, CHANGE is_verified is_verified TINYINT(1) DEFAULT 0, CHANGE is_active is_active TINYINT(1) DEFAULT 1, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE role_id role_id INT DEFAULT 1');
        $this->addSql('DROP INDEX idx_8d93d649d60322ac ON user');
        $this->addSql('CREATE INDEX role_id ON user (role_id)');
        $this->addSql('DROP INDEX uniq_8d93d649e7927c74 ON user');
        $this->addSql('CREATE UNIQUE INDEX email ON user (email)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE utilisateur CHANGE role role VARCHAR(50) DEFAULT \'USER\'');
        $this->addSql('CREATE UNIQUE INDEX email ON utilisateur (email)');
        $this->addSql('ALTER TABLE voyage CHANGE description description TEXT DEFAULT NULL, CHANGE places_disponibles places_disponibles INT DEFAULT 0 NOT NULL, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE updated_at updated_at DATETIME DEFAULT CURRENT_TIMESTAMP');
    }
}
