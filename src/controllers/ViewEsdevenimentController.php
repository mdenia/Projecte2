<?php

function ViewEsdevenimentController($request, $response, $container){

    $Esd = $container->EsdevenimentPDO();
    $Events = $Esd->listEsdeveniment();

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);
    $response->set("Event", $Events);

    $response->setTemplate("Esdeveniments.php");

    return $response;
    
}