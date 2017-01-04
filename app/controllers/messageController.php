<?php


require_once (__DIR__ . "./../../vendor/autoload.php");

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

$request = Request::createFromGlobals();
$response = new Response();

var_dump($session->get('try'));
$try = $session->get('try');
if($try == null){
    $try = 0;
}
if($try == 1){
    $messageEnd = "DEFEAT, votre score : " . $try;
}else{
    $messageEnd = "VICTORY, votre score : " . $try;
}

?>

