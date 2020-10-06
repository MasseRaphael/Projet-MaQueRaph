<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201006130516 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE videos_playlist (videos_id INT NOT NULL, playlist_id INT NOT NULL, INDEX IDX_6E5CCA86763C10B2 (videos_id), INDEX IDX_6E5CCA866BBD148 (playlist_id), PRIMARY KEY(videos_id, playlist_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE videos_categories (videos_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_660191C8763C10B2 (videos_id), INDEX IDX_660191C8A21214B7 (categories_id), PRIMARY KEY(videos_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE videos_playlist ADD CONSTRAINT FK_6E5CCA86763C10B2 FOREIGN KEY (videos_id) REFERENCES videos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE videos_playlist ADD CONSTRAINT FK_6E5CCA866BBD148 FOREIGN KEY (playlist_id) REFERENCES playlist (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE videos_categories ADD CONSTRAINT FK_660191C8763C10B2 FOREIGN KEY (videos_id) REFERENCES videos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE videos_categories ADD CONSTRAINT FK_660191C8A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE videos_playlist');
        $this->addSql('DROP TABLE videos_categories');
    }
}
