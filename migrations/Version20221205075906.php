<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221205075906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        
        $this->addSql("INSERT INTO article (id, description, prix, taille, nom, image) VALUES
        (1, 'Matière : 100% coton\r\n', 50, 'XS\r\nS\r\nM\r\nL\r\nXL\r\nXXL', 'Casquette', 'cap.jpg'),
        (2, 'Matière : 100% polyester', 120, 'XS\r\nS\r\nM\r\nL\r\nXL\r\nXXL', 'Tee-shirt floqué logo', 'tee_floque.jpg'),
        (3, 'Matière : 100 % coton', 150, 'XS\r\nS\r\nM\r\nL\r\nXL\r\nXXL', 'Sweat à capuche', 'sweat_capuche.jpg'),
        (4, 'Matière : 100% coton', 275, 'XS\r\nS\r\nM\r\nL\r\nXL\r\nXXL', 'Veste en jean', 'veste_jean.jpg'),
        (5, 'Matière : 100 % nylon recyclé\r\n', 350, 'XS\r\nS\r\nM\r\nL\r\nXL\r\nXXL', 'Doudoune ', 'doudoune.jpg'),
        (6, 'Matière : 100% coton', 165, 'XS\r\nS\r\nM\r\nL\r\nXL\r\nXXL', 'Jean', 'jean.jpg'),
        (7, 'Matière : 100% coton', 80, 'Unique', 'Sac à dos', 'sac.jpg'),
        (8, 'Matière : acier inoxydable', 20, 'Unique', 'Porte-clés logo', 'porte_clef.jpg'),
        (9, 'Matière : 100% coton', 80, 'XS\r\nS\r\nM\r\nL\r\nXL\r\nXXL', 'Jogging', 'jogging_bas.jpg'),
        (10, 'Matière : 100% coton', 100, 'XS\r\nS\r\nM\r\nL\r\nXL\r\nXXL', 'Polo', 'polo.jpg'),
        (13, 'Matière : 100% laine', 50, 'Unique', 'Bonnet', 'bonnet.jpg')");
        $this->addSql("INSERT INTO user (id, email, roles, password, name, telephone, agree_terms) VALUES
        (1, 'leonardgbotchenou37@gmail.com', '[\"ROLE_ADMIN\"]', '\$2y\$13\$E73ju7RM4QpdiOOdPp.cdeyMPWpD6puAYCB12UBJvpKVoq9Dbjcgy', '', 0, ''),
        (2, 'leonardsio@gmail.com', '[\"ROLE_ADMIN\"]', '\$2y\$13\$E73ju7RM4QpdiOOdPp.cdeyMPWpD6puAYCB12UBJvpKVoq9Dbjcgy', '', 0, ''),
        (3, 'leonardsio2@gmail.com', '[\"ROLE_ADMIN\"]', '\$2y\$13\$7fYlp4Hj7ywomumfqq2ywucq7byhkdrqeZhzXhWb1aBGMHwK8bF92', '', 0, ''),
        (5, 'zrhsthr', '[]', '\$2y\$13\$vi/L3y2L3FpRslfoTqWErekOTuyzOuhWma.j2fpg77yAsOT49AW0.', 'rtshrezh', 261350, '1'),
        (6, 'test@gmail.com', '[]', '\$2y\$13\$LXSFgk/c19LxvukM7Cy8TetxMumXpKe.kajuYAa2eqDwn1hwxB.5W', 'test', 695841751, '1'),
        (7, 'test1@gmail.com', '[]', '\$2y\$13\$8vD2m9nfqthKEI5eYS4/xOvhkmmOAaoac.jqWj.oPxqiRGnewtyPm', 'test1', 695841751, '1'),
        (8, 'sio@gmail.com', '[\"ROLE_ADMIN\"]', '\$2y\$13\$CaGOuajqVs/nQXNu/4nvV..ZK1lh5NZko0Nhfx4YG2hFNLK1Y8gZW', 'tokenman', 247263165, '1')");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE user');
    }
}
