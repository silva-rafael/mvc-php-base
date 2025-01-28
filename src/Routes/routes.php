<?php

use App\Controllers\HomeController;
use App\Controllers\ProdutoController;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;


$app = AppFactory::create();

// Create Twig
$twig = Twig::create(__DIR__ . '/../Views', ['cache' => false]);

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));



$app->get('/', [HomeController::class, 'home']);

$app->get('/produtos', [ProdutoController::class, 'home']);





$app->run();
