<?php

function AfegirConsellController($request, $response, $container){

    $Cnll = $container->ConsellPDO();
    //$Consell = $Container->ConsellPDO();

    $Title = $request->get(INPUT_POST, "TitolConsell");
    $Description = $request->get(INPUT_POST, "DescripcioConsell");
    $Text = $request->get(INPUT_POST, "Text_explicatiu");
    $Hashtags = $request->get(INPUT_POST, "Hashtags");
    $Id_User = 12;

    $Cnll->addConsell($Title, $Description, $Text, $Hashtags, $Id_User);

    $response->redirect("location: index.php");

    return $response;
}