<?php

function ViewConsellController($request, $response, $container){ // Create a function that will redirect to the view with the bdd info

    $consellPDO = $container->ConsellPDO(); // Call PDO from model
    $consell = $consellPDO->listConsell(); // Call 'listConsell' from PDO

    $response->set("Consell", $consell); // Pass all the PDO info from the bdd to the view
 
    $response->setTemplate("Consells.php"); // Redirect to the view

    return $response;
    
}