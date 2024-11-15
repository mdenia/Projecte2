<?php

function ViewLocationController($request, $response, $container){

    $response->setTemplate("ViewLocation.php"); // redirect to 'ViewLocation.php'
    $response->set('Latitud',$request->get(INPUT_GET, 'Latitud'));
    $response->set('Longitud',$request->get(INPUT_GET, 'Longitud'));

    return $response;
    
}