<?php

function auth($request, $response, $container, $next){ // Create a function that will find out if the user is logged or not

    if($request->has("SESSION", "User")){ // Find out if user is logged
        $user = $request->get("SESSION", "User", FILTER_REQUIRE_ARRAY);
        $response->set("User", $user);
        $response = $next($request, $response, $container);
    } else {
        $response->redirect("location: index.php?r=ViewLogin"); // If user is not logged out, redirect to Login Form
    }
 
   return $response;
}