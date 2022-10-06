<?php

session_start();



//entorno de desarrollo
require 'config.php';   
require 'src\router.php';
require 'src\routes.php';




//enrutamiento


$controlador = getRoute($routes);

require 'src/controllers/'.$controlador.'.php';
//llamada al controlador



//llamada a la vista



?>