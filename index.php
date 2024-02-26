<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Controller/Controller.php';

$app = AppFactory::create();

$app->get('/alunni', 'Controller:home');
$app->get('/alunni/{nome}', 'Controller:show');
$app->get('/json/alunni', 'Controller:json_alunni');
$app->get('/json/alunni/{nome}', 'Controller:json_alunni');



$app->run();
