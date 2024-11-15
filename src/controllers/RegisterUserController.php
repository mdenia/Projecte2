<?php

use Emeset\Response;

function RegisterUserController($request, $response, $container){ // Create a function  that will add our user to de bdd

    $pdo=$container->UserPDO(); // Call PDO from model

    $Nom=$request->get(INPUT_POST,"Nom"); // Take all the information from the form
    $Cognom=$request->get(INPUT_POST,"Cognom");
    $User=$request->get(INPUT_POST,"User");
    $Mail=$request->get(INPUT_POST,"Mail");
    $Password=$request->get(INPUT_POST,"Password");
    $Image = "img/users/" . $User . "/";

$pdo->add($Nom, $Cognom, $User, $Mail, $Password, $Image); // Pass this info to the model to 'add' function

mkdir($Image, 0777); // Create directory with the advice Title name
    $images = $_FILES["Image"];

    for ($i = 0; $i < count($images["name"]); $i++) { // Take images from form, change their name and move them to the previos directory
        $actual = $images["name"][$i];
        $actual = $i . "." . pathinfo($actual, PATHINFO_EXTENSION);
        $images["name"][$i] = $actual;
        move_uploaded_file($images["tmp_name"][$i], $Image . "/" . $actual);
    }
$response->redirect("location:index.php");

return $response;
}