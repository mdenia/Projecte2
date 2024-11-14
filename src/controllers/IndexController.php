<?php

function IndexController($request, $response, $container){

    $response->setTemplate("index.php"); // redirect to 'index.php'

    return $response;
    
}