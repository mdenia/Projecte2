<?php

function AfegirEsdevenimentController($request, $response, $container){ // Create a function  that will add our events to de bdd

    $Esd = $container->EsdevenimentPDO(); // Call PDO from model

    $Title = $request->get(INPUT_POST, "nomEsdeveniment"); // Take all the information from the form
    $Image = "img/events/" . $Title . "/";
    $Latitud = $request->get(INPUT_POST, "Latitud");
    $Longitud = $request->get(INPUT_POST, "Longitud");
    $Description = $request->get(INPUT_POST, "descripcioEsdeveniment");
    $Date = $request->get(INPUT_POST, "dataEsdeveniment");
    $Hour = $request->get(INPUT_POST, "horaEsdeveniment");
    $Type = $request->get(INPUT_POST, "tipusEsdeveniment");
    $Num_Views = 0;
    $ID_User = 12;

    $Esd->addEsdeveniment($Title, $Image, $Latitud, $Longitud, $Description, $Date, $Hour, $Type, $Num_Views, $ID_User); // Pass this info to the model to 'addEsdeveniment' function

    mkdir($Image, 0777); // Create directory with the event Title name
    $images = $_FILES["fileImage"];

    for ($i = 0; $i < count($images["name"]); $i++) { // Take images from form, change their name and move them to the previos directory
        $actual = $images["name"][$i];
        $actual = $i . "." . pathinfo($actual, PATHINFO_EXTENSION);
        $images["name"][$i] = $actual;
        move_uploaded_file($images["tmp_name"][$i], $Image . "/" . $actual);
    }
    $response->redirect("location: index.php");

    return $response;
}