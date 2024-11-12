<?php

function ViewAnunciController($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("Anuncis.php");

    return $response;
    
}