<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require "./Classe.php";

class Controller
{
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

    function json_post(Request $request, Response $response, $args){
        $classe = new Classe();
        $data = json_decode($request->getBody()->getContents(), true);
        $response->getBody()->write("nome: ".$data['nome']);
        return $response->withHeader('Content-Type', 'application/json');
    }

    function json_put(Request $request, Response $response, $args){
        $classe = new Classe();
        $data = json_decode($request->getBody()->getContents(), true);
        $response->getBody()->write("modifica alunno id: ".$args['id']." nome: ".$data['nome']);
        return $response->withHeader('Content-Type', 'application/json');
    }

    function json_delete(Request $request, Response $response, $args){
        $classe = new Classe();
        $response->getBody()->write("cancella alunno id: ".$args['id']);
        return $response->withHeader('Content-Type', 'application/json');
    }


    
}