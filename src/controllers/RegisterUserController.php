<?php

use Emeset\Response;

function RegisterUserController($request, $response, $container){
$pdo=$container->UserPDO();
    $Nom=$request->get(INPUT_POST,"Nom");
    $Cognom=$request->get(INPUT_POST,"Cognom");
    $User=$request->get(INPUT_POST,"User");
    $Mail=$request->get(INPUT_POST,"Mail");
    $Password=$request->get(INPUT_POST,"Password");
    $Image = "img/users/" . $User . "/";

$pdo->add($Nom, $Cognom, $User, $Mail, $Password, $Image);

mkdir($Image, 0777);
    $images = $_FILES["Image"];

    for ($i = 0; $i < count($images["name"]); $i++) {
        $actual = $images["name"][$i];
        $actual = $i . "." . pathinfo($actual, PATHINFO_EXTENSION);
        $images["name"][$i] = $actual;
        move_uploaded_file($images["tmp_name"][$i], $Image . "/" . $actual);
    }
$response->redirect("location:index.php");

return $response;
}