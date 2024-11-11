<?php

function AfegirEsdevenimentController($request, $response, $container){

    $Esd = $container->EsdevenimentPDO();
    //$Esdeveniment = $Container->EsdevenimentPDO();


    $Title = $request->get(INPUT_POST, "nomEsdeveniment");
    $Image = "img/events/" . $Title . "/";
    $Latitud = $request->get(INPUT_POST, "Latitud");
    $Longitud = $request->get(INPUT_POST, "Longitud");
    $Description = $request->get(INPUT_POST, "descripcioEsdeveniment");
    $Date = $request->get(INPUT_POST, "dataEsdeveniment");
    $Hour = $request->get(INPUT_POST, "horaEsdeveniment");
    $Type = $request->get(INPUT_POST, "tipusEsdeveniment");
    $Num_Views = 0;
    $ID_User = 1;

    $Esd->addEsdeveniment($Title, $Image, $Latitud, $Longitud, $Description, $Date, $Hour, $Type, $Num_Views, $ID_User);

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