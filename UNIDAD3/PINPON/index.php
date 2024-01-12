<?php 
use \controller\MainController;
//Primero checkeo de permisos
//Checkeo de sesiones
require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

//$klein->$service->render('MostrarProductos.php', array('title' => 'My View'));
$this->load->view('view/MostrarProductos.php');
//Cargamos el controlador principal
//include("controller/MainController.php");

?>