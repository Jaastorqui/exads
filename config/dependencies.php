<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Psr\Container\ContainerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        EntityManager::class => static function (ContainerInterface $c) {
            $proxy_dir = null;

            $config = Setup::createXMLMetadataConfiguration([__DIR__ . '/entity_meta'], false, $proxy_dir);

            $conn = [
                'url' => "mysql://jon:ander@mysql/exads?charset=utf8mb4",
            ];

            return EntityManager::create($conn, $config);
        },
    ]);
};
