<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230416174227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create tables and its relationships';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(
            <<<SQL
            CREATE TABLE customer_db.customer(
                `id` CHAR(36) PRIMARY KEY NOT NULL,
                `name` VARCHAR(50) NOT NULL,
                `address` VARCHAR(100) NOT NULL,
                `age` SMALLINT NOT NULL,
                INDEX IDX_customer_name (`name`)
                                                 
            );
            CREATE TABLE employee_db.employee(
                `id` CHAR(36) PRIMARY KEY NOT NULL,
                `name` VARCHAR(50) NOT NULL,
                INDEX IDX_employee_name (`name`)             
            );

            CREATE TABLE rent_db.car(
                `id` CHAR(36) PRIMARY KEY NOT NULL,
                `brand` VARCHAR(50) NOT NULL,                
                `model` VARCHAR(50) NOT NULL,                
                `color` VARCHAR(50) NOT NULL,
                INDEX IDX_car_brand (`brand`), 
                INDEX IDX_car_employee (`model`), 
                INDEX IDX_car_car (`color`)
            );

            CREATE TABLE rent_db.rent(
                `id` CHAR(36) PRIMARY KEY NOT NULL,
                `customer_id` CHAR(36) NOT NULL,
                `employee_id` CHAR(36) NOT NULL,
                `car` CHAR(36) NOT NULL,
                INDEX IDX_rent_customer_id (`customer_id`), 
                INDEX IDX_rent_employee_id (`employee_id`), 
                INDEX IDX_rent_car_id (`car`), 
                CONSTRAINT FK_rent_car_id FOREIGN KEY (`car`) REFERENCES rent_db.car(`id`) ON UPDATE CASCADE ON DELETE CASCADE
            );
            SQL
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql(
            <<<SQL
            DROP TABLE rent_db.rent;
            DROP TABLE rent_db.car;
            DROP TABLE employee_db.employee;
            DROP TABLE customer_db.customer;
SQL
        );
    }
}
