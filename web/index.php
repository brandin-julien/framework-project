<?php

require_once (__DIR__ . "/../vendor/autoload.php");

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

$request = Request::createFromGlobals();
$response = new Response();

$session = new Session();
$session->start();



include(__DIR__."/../app/config/routing.php");
include(__DIR__."/../app/config/controller.php");

//principe
//get path infos => appelle une route et un controller à partir de cette route VOIR config dans app


$path = $request->getPathInfo();



//$session->clear(); //test session
if($path == '/'){
    $path = '/intro'; // to start on index directly
}


if($path == '/cloackVestiaire' || $path == '/cloackHook'){
    $session->set('putCloack', true);
    var_dump($session->get('putCloack'));

}

if($path == '/westShadow' && $session->get('putCloack') == null ){

    $session->set('CountTry', 0); //count try to discover the enigma
    $getCountTry = $session->get('CountTry');
    $getCountTry =+ 1;
    var_dump($getCountTry);
    $session->set('try', $getCountTry);
    var_dump($session->get('try'));
}

var_dump($session->get('try'));


//Si le manteau est déposé PUIS creer une route controller Message et mettre a compteur de fail pour afficher victoire ou defaite

if($path == '/westShadow' && $session->get('putCloack') !== null){
    $path = '/westOpen';
}


var_dump($session->get('putCloack'));
if(isset($routes[$path])){
    ob_start();
    include $routes[$path];
    include $controllersList[$path];
    $content = ob_get_clean();
    $response->setContent($content);
}else{
    $response->setStatusCode(404);
    $response->setContent("Oops page not found ! ");
}
$response->send();