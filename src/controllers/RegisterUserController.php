<?php

use Emeset\Response;

function RegisterUserController($request, $response, $container){
$pdo=$container->UserPDO();
    $Nom=$request->get(INPUT_POST,"Nom");
    $Cognom=$request->get(INPUT_POST,"Cognom");
    $User=$request->get(INPUT_POST,"User");
    $Mail=$request->get(INPUT_POST,"Mail");
    $Password=$request->get(INPUT_POST,"Password");
    $Imatge=$request->get(INPUT_POST,"Imatge");

$pdo->add($Nom, $Cognom, $User, $Mail, $Password, $Imatge);
$response->redirect("location:index.php");

return $response;
}