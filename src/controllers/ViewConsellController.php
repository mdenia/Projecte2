<?php

function ViewConsellController($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("Consells.php");

    return $response;
    
}