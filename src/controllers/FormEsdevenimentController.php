<?php

function FormEsdevenimentController($request, $response, $container){

    $response->setTemplate("FormEsdeveniment.php"); // redirect to 'FormEsdeveniment.php'

    return $response;
    
}