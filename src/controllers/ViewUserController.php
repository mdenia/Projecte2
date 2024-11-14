<?php

function ViewUserController($request, $response, $container){

    $response->setTemplate("User.php"); // redirect to 'User.php'

    return $response;
    
}