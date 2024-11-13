<?php

function AfegirAnunciController($request, $response, $container){

    $Anunci = $container->AnunciPDO();
    //$Anunci = $Container->ConsellPDO();

    $Title = $request->get(INPUT_POST, "nomAnunci");
    $Image = "img/adds/" . $Title . "/";
    $Categoria = $request->get(INPUT_POST, "Categoria");
    $descripcio = $request->get(INPUT_POST, "descripcioAnunci");

    $Anunci->addConsell($Title, $Image, $Categoria, $descripcio);

    $response->redirect("location: index.php");

    return $response;
}