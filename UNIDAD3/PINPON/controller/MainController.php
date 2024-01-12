<?php 
namespace controller;

use model\Producto;
use model\Utils;
use PINPON\model\Producto as ModelProducto;
use PINPON\model\Utils as ModelUtils;

include ('..\model\Producto.php');
include ('..\model\Utils.php');

session_start();
//Si la sesion esta iniciada y hay usuario lo mandamos a la web principal
//Sino lo redireccionamos al login

//Forzamos a que vaya al listado fingiendo que estamos logados
$_SESSION['user']="pedro";

if (isset($_SESSION['user']))
{

    //Nos conectamos a BD
    $pdo = ModelUtils::conectar();
    //Cargamos los datos de los productos
    $datosProducto = ModelProducto::getProductos($pdo);

    //Cargamos la vista
    include('../view/MostrarProductos.php');
}
else
    include('../view/Login.php');

?>