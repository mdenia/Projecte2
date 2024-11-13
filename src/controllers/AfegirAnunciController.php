<?php

function AfegirAnunciController($request, $response, $container){

    $Anunci = $container->AnunciPDO();
    //$Anunci = $Container->AnunciPDO();

    $Title = $request->get(INPUT_POST, "nomAnunci");
    $Image = "img/adds/" . $Title . "/";
    $Categoria = $request->get(INPUT_POST, "Categoria");
    $Estat = "Public";
    $descripcio = $request->get(INPUT_POST, "descripcioAnunci");
    $Id_User = 12;

    $Anunci->addAnunci($Title, $Image, $Categoria, $Estat, $descripcio, $Id_User);

    $response->redirect("location: index.php");

    return $response;
}