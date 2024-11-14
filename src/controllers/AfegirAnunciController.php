<?php

function AfegirAnunciController($request, $response, $container){

    $Anunci = $container->AnunciPDO();
    //$Anunci = $Container->AnunciPDO();

    $Title = $request->get(INPUT_POST, "nomAnunci");
    $Image = "img/ads/" . $Title . "/";
    $descripcio = $request->get(INPUT_POST, "descripcioAnunci");
    $Estat = "Public";
    $Categoria = $request->get(INPUT_POST, "Categoria");
    $Id_User = 12;

    $Anunci->addAnunci($Title, $Image, $descripcio, $Estat, $Categoria, $Id_User);

    mkdir($Image, 0777);
    $images = $_FILES["fileImage"];

    for ($i = 0; $i < count($images["name"]); $i++) {
        $actual = $images["name"][$i];
        $actual = $i . "." . pathinfo($actual, PATHINFO_EXTENSION);
        $images["name"][$i] = $actual;
        move_uploaded_file($images["tmp_name"][$i], $Image . "/" . $actual);
    }

    $response->redirect("location: index.php");

    return $response;
}