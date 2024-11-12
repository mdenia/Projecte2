<?php

function LoginUserController($request, $response, $container) {

    $Users = $container->users();

    $User = $request->get(INPUT_POST, "User");
    $Password = $request->get(INPUT_POST, "Password");

    $currentUser = $Users->getByUser($User, $Password);

    if($currentUser) {

        $response->setSession("User", $currentUser);
        $response->setSession("loginOk", true);
        $response->redirect("location: index.php");
    } else {
        $response->redirect("location: index.php?r=login&error=1"); //Hacer un isset(Get["error"])
    }
    return $response;
}