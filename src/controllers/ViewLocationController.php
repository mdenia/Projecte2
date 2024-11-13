<?php

function ViewLocationController($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("ViewLocation.php");

    return $response;
    
}