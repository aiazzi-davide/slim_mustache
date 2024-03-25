<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/Controller/Controller.php';

$app = AppFactory::create();

$app->get('/alunni', 'Controller:json_alunni');
$app->get('/alunni/{nome}', 'Controller:json_alunni');
$app->post('/alunni', 'Controller:json_post');
$app->put('/alunni/{id}', 'Controller:json_put');
$app->delete('/alunni/{id}', 'Controller:json_delete');


$app->run();
