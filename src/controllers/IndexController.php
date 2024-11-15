<?php

function IndexController($request, $response, $container){

    $Esd = $container->EsdevenimentPDO(); // Call PDO from model
    $Events = $Esd->listEsdeveniment(); // Call 'listEsdeveniment' from PDO

    $response->set("Event", $Events); // Pass all the PDO info from the bdd to the view

    $response->setTemplate("index.php"); // redirect to 'index.php'

    return $response;
    
}