<?php

function ViewAnunciController($request, $response, $container){

    $AnunciPDO = $container->AnunciPDO();
    $Anunci = $AnunciPDO->listAnunci();
    
    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);
    $response->set("Anunci", $Anunci);

    $response->setTemplate("Anuncis.php");

    return $response;
    
}