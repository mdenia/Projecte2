<?php

function LoginUserController($request, $response, $container) {

    $Users = $container->UserPDO(); // Call PDO from model

    $User = $request->get(INPUT_POST, "User"); // Set user from the login form
    $Password = $request->get(INPUT_POST, "Password"); // Set password from the login form

    $currentUser = $Users->login($User, $Password);

    if($currentUser) { // Prepare and create the session

        $response->setSession("User", $currentUser);
        $response->setSession("loginOk", true);
        $response->redirect("location: index.php");
    } else {
        $response->redirect("location: index.php?r=ViewLogin&error=1"); // Redirect to index.php with an error
    }
    return $response;
}