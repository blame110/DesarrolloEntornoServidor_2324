<?php 
namespace controller;


use PINPON\model\Producto as ModelProducto;
use PINPON\model\Utils as ModelUtils;

include ('..\model\Producto.php');
include ('..\model\Utils.php');

session_start();

$_SESSION['user']="pedro";

if (isset($_SESSION['user']))
{
//Si el usuario esta logado insertamos el producto
//Si no hay conexion activa nos conectamos
if (!isset($pdo))
$pdo= ModelUtils::conectar();

//Cargamos el id del producto a insertar

$nombre = ModelUtils::validarDatos($_POST['nombre']);
$descripcion = ModelUtils::validarDatos($_POST['descripcion']);
$peso = ModelUtils::validarDatos($_POST['peso']);
$precio = ModelUtils::validarDatos($_POST['precio']);
$tamano = ModelUtils::validarDatos($_POST['tamano']);

//Creamos el array asociativo con los datos del producto
$prod_nuevo=['nombre'=>$_POST['nombre'], 'descripcion'=>$_POST['descripcion'],'peso'=>$_POST['peso'],'precio'=>$_POST['precio'],'tamano'=>$_POST['tamano']];

//Insertamos el producto
//Habria que comprobar que se ha insertado bien
ModelProducto::insertProducto($pdo,$prod_nuevo);

//Cargamos la vista principal
  //Cargamos los datos de los productos
  $datosProducto = ModelProducto::getProductos($pdo);

  //Cargamos la vista
  include('..\view/MostrarProductos.php');

}



?>