<?php

function FormAnunciController($request, $response, $container){

    $response->setTemplate("FormAnunci.php"); // redirect to 'FormAnunci.php'

    return $response;
    
}