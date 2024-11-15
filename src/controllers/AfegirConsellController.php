<?php

function AfegirConsellController($request, $response, $container){ // Create a function  that will add our advices to de bdd

    $Cnll = $container->ConsellPDO();// Call PDO from model

    $Title = $request->get(INPUT_POST, "TitolConsell"); // Take all the information from the form
    $Description = $request->get(INPUT_POST, "DescripcioConsell");
    $Text = $request->get(INPUT_POST, "Text_explicatiu");
    $Hashtags = $request->get(INPUT_POST, "Hashtags");
    $Id_User = 12;

    $Cnll->addConsell($Title, $Description, $Text, $Hashtags, $Id_User); // Pass this info to the model to 'addConsell' function

    $response->redirect("location: index.php");

    return $response;
}