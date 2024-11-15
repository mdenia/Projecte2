<?php

function ViewAnunciController($request, $response, $container){ // Create a function that will redirect to the view with the bdd info

    $AnunciPDO = $container->AnunciPDO(); // Call PDO from model
    $Anunci = $AnunciPDO->listAnunci(); // Call 'listAnunci' from PDO

    $response->set("Anunci", $Anunci); // Pass all the PDO info from the bdd to the view

    $response->setTemplate("Anuncis.php"); // Redirect to the view

    return $response;
    
}