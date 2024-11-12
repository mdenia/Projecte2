<?php

function auth($request, $response, $container, $next){

    if($request->has("SESSION", "User")){
        $user = $request->get("SESSION", "User", FILTER_REQUIRE_ARRAY);
        $response->set("User", $user);
        $response = $next($request, $response, $container);
    } else {
        $response->redirect("location: index.php?r=ViewLogin");
    }
 
   return $response;
}