<?php

use Emeset\Response;

function LoginUserController($request, $response, $container){
$pdo=$container->UserPDO();
    $Nom=$request->get(INPUT_POST,"Nom");
    $Email=$request->get(INPUT_POST,"Email");
    $Password=$request->get(INPUT_POST,"Password");

$pdo->add($Nom, $Email, $Password);
$response->redirect("location:index.php");

return $response;
}