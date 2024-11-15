<?php

function ViewEsdevenimentController($request, $response, $container){ // Create a function that will redirect to the view with the bdd info

    if ($request->isAjax()) {
        $Esd = $container->EsdevenimentPDO(); // Call PDO from model
        $Events = $Esd->categorySelect($request->get(INPUT_POST, "category")); // Call 'categorySelect' from PDO
        $response->set("Event", $Events); // Pass all the PDO info from the bdd to the view
        $response->setJson();
        return $response;
    }

    $Esd = $container->EsdevenimentPDO(); // Call PDO from model
    $Events = $Esd->listEsdeveniment(); // Call 'listEsdeveniment' from PDO

    $response->set("Event", $Events); // Pass all the PDO info from the bdd to the view

    $response->setTemplate("Esdeveniments.php"); // Redirect to the view

    return $response;
    
}