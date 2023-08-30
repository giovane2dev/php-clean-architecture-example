<?php

use DI\Container;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

use WebUI\Controllers\TypesOfCoffeeController;

require 'vendor/autoload.php';
require 'init.php';

header('Access-Control-Allow-Origin: *', false);

$container = new Container();

$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/Infra/IoC/DependencyInjection.php');
$container = $containerBuilder->build();

AppFactory::setContainer($container);

$app = AppFactory::create();

$app->setBasePath(BASE_PATH);
$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

// routes

$app->get('/types-of-coffee/find/{id}', [TypesOfCoffeeController::class, 'find']);

$app->run();
