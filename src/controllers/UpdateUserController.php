<?php

function UpdateUserController($request, $response, $container){

    $Usr = $container->UserPDO();
    //$Consell = $Container->ConsellPDO();

    $Name = $request->get(INPUT_POST, "Nom");
    $Surname = $request->get(INPUT_POST, "Cognom");
    $User = $request->get(INPUT_POST, "User");
    $Mail = $request->get(INPUT_POST, "Mail");
    $Password = $request->get(INPUT_POST, "Password");
    $Image = "img/users/" . $User . "/";

    $Usr->updateUser($Name, $Surname, $User, $Mail, $Password, $Image);

    $response->redirect("location: index.php");

    $images = $_FILES["Image"];


        $actual = $images["name"];
        $actual =  "0." . pathinfo($actual, PATHINFO_EXTENSION);
        move_uploaded_file($images["tmp_name"], $Image . "/" . $actual);

    return $response;
}