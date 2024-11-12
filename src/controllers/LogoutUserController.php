<?php

function LogoutUserController($request, $response, $container){

session_destroy();

$response->setTemplate("index.php");

return $response;

}