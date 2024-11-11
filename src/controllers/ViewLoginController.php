<?php

function ViewLoginController($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("FormLogin.php");

    return $response;
    
}