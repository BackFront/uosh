<?php
require(__DIR__ . '/../bootstrap.php');

use Uosh\Entity\Client;
use Uosh\Mapper\ClientMapper;
use Uosh\Service\ClientService;

//Containers
$app['ClientService'] = function() use ($em) {
    $client = new Uosh\Entity\Client();
    //$clientMapper = new ClientMapper($em);
    return new ClientService($em);
};

//Routs
$app->get('/', function() use ($app) {
    return $app['twig']->render('index.twig', []);
});


$app->get('/login', function() use ($app) {
    $args = new stdClass();
    $args->app = $app;
    return Controller\HomeController::login($args);
});

$app->get('/teste', function() use ($app) {
    $args = new stdClass();
    $args->app = $app;
    return Controller\HomeController::teste($args);
});

$app->get('/teste/update/{id}', function() use ($app) {
    $args = new stdClass();
    $args->app = $app;
    return Controller\HomeController::teste($args);
});

$app->get('/client/register', function() use ($app) {
    $args = new stdClass();
    $args->app = $app;
    return Controller\HomeController::teste($args);
});

$app->run();
