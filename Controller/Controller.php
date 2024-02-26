<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include __DIR__ . './../views/Home.php';
include __DIR__ . './../views/Show.php';

require "./Classe.php";

class Controller
{
    function home(Request $request, Response $response, $args)
    {
        //database
        $classe = new Classe();
        $view = new Home();
        //var_dump($classe->getArray());                                                                                           
        $view->setData($classe);
        $response->getBody()->write($view->render());
        return $response;
    }
    function show(Request $request, Response $response, $args)
    {
        $classe = new Classe();
        $view = new Show();
        
        $view->setData($classe->getAlunno($args['nome']));
        $response->getBody()->write($view->render());
        return $response;
    }
    function json_alunni(Request $request, Response $response, $args){
        $classe = new Classe();
        
        if (isset($args['nome'])){
            $alunno = $classe->getAlunno($args['nome']);
            $encoded = json_encode($alunno);
            $response->getBody()->write($encoded);
            
        } else {
            $encoded = json_encode($classe->getArray());
            $response->getBody()->write($encoded);
        }
        return $response->withHeader('Content-Type', 'application/json');
    }
}