<?php

function ViewConsellController($request, $response, $container){

    $consellPDO = $container->ConsellPDO();
    $consell = $consellPDO->listConsell();

    $name = $request->get(INPUT_GET, "name");
    
    $response->set("name", $name);
    $response->set("Consell", $consell);

    $response->setTemplate("Consells.php");

    return $response;
    
}