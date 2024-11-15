<?php

function ViewLoginController($request, $response, $container){ 

    $response->setTemplate("FormLogin.php"); // redirect to 'FormLogin.php'

    return $response;
    
}