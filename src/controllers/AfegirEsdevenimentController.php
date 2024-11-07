<?php

function AfegirEsdevenimentController($request, $response, $container){

    $urls = $container->UrlsPDO();
    //$Esdeveniment = $Container->EsdevenimentPDO();

    //$Id =
    //$Title = $request->get(INPUT_POST, "nomEsdeveniment");
    //$Image = $request->get(INPUT_POST, "fileImage");
    //$Latitud = $request->get(INPUT_POST, "Latitud");
    //$Longitud = $request->get(INPUT_POST, "Longitud");
    //$Description = $request->get(INPUT_POST, "descripcioEsdeveniment");
    //$Date = $request->get(INPUT_POST, "dataEsdeveniment");
    //$Hour = $request->get(INPUT_POST, "horaEsdeveniment");
    //$Type = $request->get(INPUT_POST, "tipusEsdeveniment"); //Falta posar al formulari
    //$Num_Views =
    $title = $request->get(INPUT_POST, "title"); //htmlspecialchars(trim($_POST["title"]));
    $url = $request->get(INPUT_POST, "url"); //htmlspecialchars(trim($_POST["url"]));
    $description = $request->get(INPUT_POST, "description"); //htmlspecialchars(trim($_POST["description"]));

    $urls->add($title, $url, $description);
   
    $response->redirect("location: index.php?r=list&ok=1");

    return $response;
}