<?php

function AfegirConsellController($request, $response, $container){

    $Cnll = $container->ConsellPDO();
    //$Consell = $Container->ConsellPDO();

    $Title = $request->get(INPUT_POST, "TitolConsell");
    $Description = $request->get(INPUT_POST, "DescripcioConsell");
    $Text = $request->get(INPUT_POST, "Text_explicatiu");
    $Hashtags = $request->get(INPUT_POST, "Hashtags");

    $Cnll->addConsell($Title, $Description, $Text, $Hashtags);

    $response->redirect("location: index.php");

    return $response;
}