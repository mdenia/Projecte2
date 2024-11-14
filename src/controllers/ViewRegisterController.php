<?php

function ViewRegisterController($request, $response, $container){

    $response->setTemplate("FormRegister.php"); // redirect to 'FormRegister.php'

    return $response;
    
}