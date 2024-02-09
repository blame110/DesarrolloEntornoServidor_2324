<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 
//Si no estan cargados los paises o las provincias damos error de conexion
if (!isset($listaPaises) || !isset($listaProvincias))
{
    //return view('errorConexion');
}

?>

<body>

    <form action="../controller/listarDirecciones.php" method="post">
        Provincias:
        <select  name=provincia>
            <option value=-1  default>Todas</option>
        <?php 
         foreach ($listaProvincias as $provincia){
            echo "<option value=".$provincia['id'].">".$provincia['nombre']."</option>";
         }
        ?>

        </select>

        Paises:
        <select name=pais>
        <option value=-1 default>Todos</option>
        <?php 
         foreach ($listaPaises as $pais){
            echo "<option value=".$pais['id'].">".$pais['nombre']."</option>";
         }
        ?>
        </select>

        <button type=submit>Cargar</button>
    </form>

<?php 

if (isset($listaDir))
{
    foreach( $listaDir as $direccion)
    {
        //dir['nombre']
    }


    
}
?>


</body>

</html>