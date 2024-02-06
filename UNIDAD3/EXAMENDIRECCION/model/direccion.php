<?php

namespace model;

use PDOException;

class Direccion
{



    /**
     * Devuelve un array 
     */
    public static function getDireccionProv($con, $provincia)
    {

        try {
            //Realizamos una query
            //$query = "SELECT direcciones.* FROM direcciones where direcciones.idProvincia = :idProvincia";

            $query = "SELECT direcciones.* FROM direcciones, provincias where provincia.nombre = :provincia and provincia.id = direcciones.idProvincia";

            //Prepararmos la ejecucion de la sentencia (statement stmt)
            $stmt = $con->prepare($query);

            //Asociamos el valor del parametro idproducto a la posicion de :id
            $stmt->bindValue(':provincia', $provincia);

            $stmt->execute();

            //Devolvemos todos los datos del statement que se han conseguido despues de 
            //Ejecutar la query
            $resulSet = $stmt->fetchAll();

        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //Devolvemos los datos de la query
        return $resulSet;
    }
}
