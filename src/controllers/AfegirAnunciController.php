<?php

function AfegirAnunciController($request, $response, $container){ // Create a function  that will add our adds to de bdd

    $Anunci = $container->AnunciPDO(); // Call PDO from model

    $Title = $request->get(INPUT_POST, "nomAnunci"); // Take all the information from the form
    $Image = "img/ads/" . $Title . "/";
    $descripcio = $request->get(INPUT_POST, "descripcioAnunci");
    $Estat = "Public";
    $Categoria = $request->get(INPUT_POST, "Categoria");
    $Id_User = 12;

    $Anunci->addAnunci($Title, $Image, $descripcio, $Estat, $Categoria, $Id_User); // Pass this info to the model to 'addAnunci' function

    mkdir($Image, 0777); // Create directory with the advice Title name
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