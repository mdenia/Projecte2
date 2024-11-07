<?php

function AfegirEsdevenimentController($request, $response, $container){

    $urls = $container->EsdevenimentPDO();
    //$Esdeveniment = $Container->EsdevenimentPDO();

    $Id_Esdeveniment = 1;
    $Title = $request->get(INPUT_POST, "nomEsdeveniment");
    $Image = $request->get(INPUT_POST, "fileImage");
    $Latitud = $request->get(INPUT_POST, "Latitud");
    $Longitud = $request->get(INPUT_POST, "Longitud");
    $Description = $request->get(INPUT_POST, "descripcioEsdeveniment");
    $Date = $request->get(INPUT_POST, "dataEsdeveniment");
    $Hour = $request->get(INPUT_POST, "horaEsdeveniment");
    $Type = $request->get(INPUT_POST, "tipusEsdeveniment");
    $Num_Views = 0;
    $ID_User = 0;

    $urls->addEsdeveniment($Id_Esdeveniment, $Title, $Image, $Latitud, $Longitud, $Description, $Date, $Hour, $Type, $Num_Views, $ID_User);
   
    $response->redirect("location: index.php?r=list&ok=1");

    return $response;
}