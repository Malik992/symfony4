<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180406041351 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE paiement CHANGE contrat_id contrat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bien_pro CHANGE proprietaire_id proprietaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat CHANGE client_id client_id INT DEFAULT NULL, CHANGE bien_id bien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE client_id client_id INT DEFAULT NULL, CHANGE bien_id bien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat_pro CHANGE proprietaire_id proprietaire_id INT DEFAULT NULL, CHANGE bienpro_id bienpro_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reserve_pro CHANGE proprietaire_id proprietaire_id INT DEFAULT NULL, CHANGE bienpro_id bienpro_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image CHANGE bien_id bien_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE imagepro CHANGE bienpro_id bienpro_id INT DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bien_pro CHANGE proprietaire_id proprietaire_id INT NOT NULL');
        $this->addSql('ALTER TABLE contrat CHANGE client_id client_id INT NOT NULL, CHANGE bien_id bien_id INT NOT NULL');
        $this->addSql('ALTER TABLE contrat_pro CHANGE proprietaire_id proprietaire_id INT NOT NULL, CHANGE bienpro_id bienpro_id INT NOT NULL');
        $this->addSql('ALTER TABLE image CHANGE bien_id bien_id INT NOT NULL');
        $this->addSql('ALTER TABLE imagepro CHANGE bienpro_id bienpro_id INT NOT NULL');
        $this->addSql('ALTER TABLE paiement CHANGE contrat_id contrat_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE client_id client_id INT NOT NULL, CHANGE bien_id bien_id INT NOT NULL');
        $this->addSql('ALTER TABLE reserve_pro CHANGE proprietaire_id proprietaire_id INT NOT NULL, CHANGE bienpro_id bienpro_id INT NOT NULL');
    }
}
