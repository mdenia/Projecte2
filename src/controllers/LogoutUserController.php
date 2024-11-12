<?php

function LogoutUserController($request, $response, $container){

session_destroy();

$response->setTemplate("FromLogin.php");

return $response;

}