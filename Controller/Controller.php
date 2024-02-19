<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include __DIR__.'./../views/Home.php';
require "./Classe.php";


class Controller{
    function home (Request $request, Response $response, $args){
        //database
        $classe= new Classe();
        $view = new Home();      
        //var_dump($classe->getArray());                                                                                           
        $view->setData($classe);
        $response->getBody()->write($view->render());
        return $response;
    }
}