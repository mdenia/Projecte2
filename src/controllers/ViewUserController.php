<?php

function ViewUserController($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("User.php");

    return $response;
    
}