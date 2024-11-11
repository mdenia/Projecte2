<?php

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

 /* 
  * Aquesta és la part que fa que funcioni el Front Controller.
  * Si no hi ha cap paràmetre, carreguem la pàgina d'inici.
  * Si hi ha paràmetre, carreguem la pàgina que correspongui.
  * Si no existeix la pàgina, carreguem la pàgina d'error.
  */
 $r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }
 
 /* Front Controller, aquí es decideix quina acció s'executa */
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

elseif($r == "User") { // Canviar a ViewRegister
  include "../src/controllers/ViewRegisterController.php";
  $response = ViewRegisterController($request, $response, $container);
}

elseif($r == "CreateEsdeveniment") {
  include "../src/controllers/AfegirEsdevenimentController.php";
  $response = AfegirEsdevenimentController($request, $response, $container);
}

else {
     echo "No existeix la ruta";
 }

 $response->response();