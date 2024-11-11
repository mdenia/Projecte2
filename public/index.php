<?php

use Emeset\Response;

include "../src/config.php";

include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";
include "../src/ProjectContainer.php";
include "../src/models/Db.php";
include "../src/models/UserPDO.php";
include "../src/models/EsdevenimentPDO.php";

 $request = new \Emeset\Request();
 $response = new \Emeset\Response();
 //$container = new \Emeset\Container($config);
 $container = new ProjectContainer($config);

 $r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }

 if($r == "") {
  include "../src/controllers/IndexController.php";
  $response = IndexController($request, $response, $container);
 } 
 
 elseif($r == "ViewConsell") {
  include "../src/controllers/ViewConsellController.php";
  $response = ViewConsellController($request, $response, $container);
} 

elseif($r == "ViewEsdeveniment") {
  include "../src/controllers/ViewEsdevenimentController.php";
  $response = ViewEsdevenimentController($request, $response, $container);
}

elseif($r == "ViewAnunci") {
  include "../src/controllers/ViewAnunciController.php";
  $response = ViewAnunciController($request, $response, $container);
}

elseif($r == "RegisterUser") {
  include "../src/controllers/RegisterUserController.php";
  $response = RegisterUserController($request, $response, $container);
}

elseif($r == "ViewRegister") {
  include "../src/controllers/ViewRegisterController.php";
  $response = ViewRegisterController($request, $response, $container);
}

elseif($r == "CreateEsdeveniment") {
  include "../src/controllers/AfegirEsdevenimentController.php";
  $response = AfegirEsdevenimentController($request, $response, $container);
}

elseif($r == "ViewLogin") {
  include "../src/controllers/ViewLoginController.php";
  $response = ViewLoginController($request, $response, $container);
}

else {
     echo "No existeix la ruta";
 }

 $response->response();