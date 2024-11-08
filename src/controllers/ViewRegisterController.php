<?php

function ViewRegisterController($request, $response, $container){

    $name = $request->get(INPUT_GET, "name");

    $response->set("name", $name);

    $response->setTemplate("FormRegister.php");

    return $response;
    
}