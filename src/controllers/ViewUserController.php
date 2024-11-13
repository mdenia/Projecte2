<?php

function ViewUserController($request, $response, $container){

    $User = $_SESSION["User"];
    
    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);


    $response->setTemplate("User.php");

    return $response;
    
}