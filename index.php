<?php
//Me aseguro que si hay un error, este sea desplegado
ini_set('display_errors', 1);

//Obtener el parámetro p desde el query string
$path_base = $_GET['p'];

//Separamos el parámetro por un '/'
$path = explode('/', $path_base);

//El nombre del controlador es la ultima parte del path
$ctrl_name = count($path) == 1? $path[0] : $path[1];

//Cargamos el controlador desde la carpeta controllers
$ctrl_path = "controllers/" . $path_base . "_controller.php";
if(!file_exists($ctrl_path)) {
    die("Kaboom!");
}

require("controllers/BaseController.php");
require("models/BaseModel.php");
require($ctrl_path);

//Generamos la instancia del controller correspondiente
$ctrl_name = ucfirst($ctrl_name) . "Controller";
$ctrl = new $ctrl_name();


//Seleccionar el método que se utilizará
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    // Method is POST
} elseif ($method == 'GET') {
    $ctrl->get();
} elseif ($method == 'PUT') {
    // Method is PUT
} elseif ($method == 'DELETE') {
    // Method is DELETE
} else {
    // Method unknown
}