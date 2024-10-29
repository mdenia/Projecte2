<?php

function createEsdevenimentController($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("FormEsdeveniment.php");

    return $response;
    
}