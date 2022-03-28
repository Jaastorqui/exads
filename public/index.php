<?php

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Instantiate PHP-DI ContainerBuilder
$containerBuilder = new ContainerBuilder();

// Register twig
$twig = require __DIR__ . '/../config/twig.php';
$twig($containerBuilder);

// Set up dependencies
$dependencies = require __DIR__ . '/../config/dependencies.php';
$dependencies($containerBuilder);

// Set up repositories
$repositories = require __DIR__ . '/../config/repositories.php';
$repositories($containerBuilder);

// Build PHP-DI Container instance
$container = $containerBuilder->build();

// Instantiate the app
AppFactory::setContainer($container);

$app = AppFactory::create();

// Add Error Middleware
$errorMiddleware = $app->addErrorMiddleware(true, false, false);

// Register routes
$routes = require __DIR__ . '/../config/routes.php';
$routes($app);


$app->run();
