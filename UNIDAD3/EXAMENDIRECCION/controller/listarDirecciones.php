<?php 
use model\Utils as Utils;
use model\Direccion as Direccion;
use model\Pais as Pais;
use model\Provincia as Provincia;

require('../model/Utils.php');
require('../model/direccion.php');
require('../model/pais.php');
require('../model/provincias.php');

//Si es la primera carga o no se ha selecionado ningun país o provincia
//Cargamos todas las direcciones

//Nos  conectamos a bd
if (!isset($con))
{
    $con = Utils::conectar();
}

if ((!isset($_POST['provincia']) && !isset($_POST['pais'])) || ($_POST['provincia']==-1 && $_POST['pais']==-1))
{
    //Cargamos todas las direcciones
    $listaDir = Direccion::getDireccionProv()

}

?>