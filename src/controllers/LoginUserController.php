<?php

function LoginUserController($request, $response, $container) {

    $Users = $container->UserPDO();

    $User = $request->get(INPUT_POST, "User");
    $Password = $request->get(INPUT_POST, "Password");

    $currentUser = $Users->login($User, $Password);

    if($currentUser) {

        $response->setSession("User", $currentUser);
        $response->setSession("loginOk", true);
        $response->redirect("location: index.php");
    } else {
        $response->redirect("location: index.php?r=ViewLogin&error=1");
    }
    return $response;
}