<?php

function FormAnunciController($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("FormAnunci.php");

    return $response;
    
}