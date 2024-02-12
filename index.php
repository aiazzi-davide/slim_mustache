<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Controller/Controller.php';

$app = AppFactory::create();

$app->get('/alunni', 'Controller:home');
$app->run();
