<?php

require_once (__DIR__ . "/../vendor/autoload.php");

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();


include(__DIR__."/../app/config/routing.php");
include(__DIR__."/../app/config/controller.php");

//principe
//get path infos => appelle une route et un controller à partir de cette route VOIR config dans app


$path = $request->getPathInfo();
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