<?php

function FormUserController($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("FormUser.php");

    return $response;
    
}