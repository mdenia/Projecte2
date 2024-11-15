<?php

function UpdateUserController($request, $response, $container){ // Create a function  that will update our adds to de bdd

    $Usr = $container->UserPDO(); // Call PDO from model

    $Name = $request->get(INPUT_POST, "Nom"); // Take all the information from the form
    $Surname = $request->get(INPUT_POST, "Cognom");
    $User = $request->get(INPUT_POST, "User");
    $Mail = $request->get(INPUT_POST, "Mail");
    $Password = $request->get(INPUT_POST, "Password");
    $Image = "img/users/" . $User . "/";

    $Usr->updateUser($Name, $Surname, $User, $Mail, $Password, $Image); // Pass this info to the model to 'updateUser' function

    $response->redirect("location: index.php");

    $images = $_FILES["Image"];


        $actual = $images["name"]; // Take images from form, change their name and move them to the user directory we created in the register
        $actual =  "0." . pathinfo($actual, PATHINFO_EXTENSION);
        move_uploaded_file($images["tmp_name"], $Image . "/" . $actual);

    return $response;
}