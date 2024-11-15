<?php

function LogoutUserController($request, $response, $container){ // Create a function that will Logout our User

session_destroy(); // Destroy session to logout

$response->setTemplate("FormLogin.php"); // redirect to 'FormLogin.php'

return $response;

}