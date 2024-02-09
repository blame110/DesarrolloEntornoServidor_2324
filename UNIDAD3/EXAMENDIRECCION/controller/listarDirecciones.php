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

//Guardamos las variables que nos ha pasado la vista para que no se pierdan
//Y las inicializamos previamente;
//Numpag es la pagina actual del listado
//Y numElem es la cantidad de elementos que mostramos por pagina
$pais=-1;
$provincia=-1;
$numPag=1;
$numElem=10;

if (isset($_POST['pais']))
{
    $pais=$_POST['pais'];
}

if (isset($_POST['provincia']))
{
    $provincia=$_POST['provincia'];
}

if (isset($_POST['numPag']))
{
    $numPag=$_POST['numPag'];
}

if (isset($_POST['numElem']))
{
    $numElem=$_POST['numElem'];
}

//Nos  conectamos a bd
if (!isset($con))
{
    $con = Utils::conectar();
}

//Si no nos llega la provincia o el pais, cargamos todas las direcciones
if ((!isset($_POST['provincia']) && !isset($_POST['pais'])) || ($_POST['provincia']==-1 && $_POST['pais']==-1))
{
    //Cargamos todas las direcciones
    $listaDir = Direccion::getDirecciones($con);

}
else{

    //Si nos llega el filtrado por provincia cargamos las direcciones de esa provincia
    if (isset($_POST['provincia']) && $_POST['provincia']!=-1)
    {
        //Cargamos todas las direcciones
        $listaDir = Direccion::getDireccionProvPag($con,$provincia,$numPag,$numElem);
    }

   //Si nos llega el filtrado por pais cargamos las direcciones de ese pais
   if (isset($_POST['pais']) && $_POST['pais']!=-1)
   {
       //Cargamos todas las direcciones
       $listaDir = Direccion::getDireccionPAis($con,$_POST['pais']);
   }

   //Cargamos la vista
   include ("../view/mostrarDirecciones.php");
}

?>