<?php

namespace Infra\Data\Context;

use Infra\Data\Interfaces\IDatabase;

use Doctrine\ORM\ORMSetup;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;

class AppDbContext implements IDatabase
{
    public function getInstance()
    {
        $path = array(__DIR__ . '/Domain/Entities');
        $isDevMode = true;

        $dbParams = array(
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'dbname'   => 'php-clean-archictecture',
            'user'     => 'sample_user',
            'password' => '',
            'charset' => 'utf8mb4'
        );

        $config = ORMSetup::createAnnotationMetadataConfiguration($path, $isDevMode, null, null, false);
        $connection = DriverManager::getConnection($dbParams, $config);

        return new EntityManager($connection, $config);
    }
}
