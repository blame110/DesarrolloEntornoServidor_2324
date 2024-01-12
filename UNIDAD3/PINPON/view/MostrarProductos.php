<html>

<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">PESO</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">TAMAÑO</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //var_dump($datosProducto);
                //nombre, descripcion, peso, precio, tamano where idProductos
                //Recorremos todos los registros de la base de datos
                for ($i = 0; $i < count($datosProducto); $i++) {
                    //Para cada registro de BD hay que crear una fila de la tabla
                    print("<tr>\n");
                    //Recorremos todos los datos de este registro
                    for ($j = 0; $j < count($datosProducto[$i]) / 2; $j++) {
                        //Para cada dato del registro creamos una celda
                        print("<td>" . $datosProducto[$i][$j] . "</td>\n");
                    }

                    //Boton para modificar el producto
                    print("<form action=../view/VerProducto.php method=POST>\n");
                    print("<input type='hidden' name='accion' value='Modificar'>");
                    print("<input type=hidden name='idProducto' value='" . $datosProducto[$i]['idProductos'] . "'>");
                    print("<input type=hidden name='nombre' value='" . $datosProducto[$i]['nombre'] . "'>");
                    print("<input type=hidden name='descripcion' value='" . $datosProducto[$i]['descripcion'] . "'>");
                    print("<input type=hidden name='peso' value='" . $datosProducto[$i]['peso'] . "'>");
                    print("<input type=hidden name='precio' value='" . $datosProducto[$i]['precio'] . "'>");
                    print("<input type=hidden name='tamano' value='" . $datosProducto[$i]['tamano'] . "'>");
                    print("<td><button type=submit>Modificar</button></td>");
                    print("</form>");


                    //Boton para Eliminar el producto
                    print("<form action=EliminarDatosController.php method=POST>\n");
                    print("<input type=hidden name='idProducto' value='" . $datosProducto[$i]['idProductos'] . "'>");
                    print("<td><button type=submit>Eliminar</button></td>");
                    print("</form>");

                    print("</tr>\n");
                }
                ?>

            </tbody>
        </table>
        <form action='../view/VerProducto.php' method='POST'>
            <input type='hidden' name='accion' value='Insertar'>
            <button type='submit'>Añadir Producto</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>