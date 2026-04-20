<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260420120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add nullable google_id and github_id columns to user table when missing';
    }

    public function up(Schema $schema): void
    {
        $schemaManager = $this->connection->createSchemaManager();
        $columns = $schemaManager->listTableColumns('user');

        if (!isset($columns['google_id'])) {
            $this->addSql('ALTER TABLE `user` ADD `google_id` VARCHAR(191) DEFAULT NULL');
        }

        if (!isset($columns['github_id'])) {
            $this->addSql('ALTER TABLE `user` ADD `github_id` VARCHAR(191) DEFAULT NULL');
        }
    }

    public function down(Schema $schema): void
    {
        $schemaManager = $this->connection->createSchemaManager();
        $columns = $schemaManager->listTableColumns('user');

        if (isset($columns['google_id'])) {
            $this->addSql('ALTER TABLE `user` DROP COLUMN `google_id`');
        }

        if (isset($columns['github_id'])) {
            $this->addSql('ALTER TABLE `user` DROP COLUMN `github_id`');
        }
    }
}
