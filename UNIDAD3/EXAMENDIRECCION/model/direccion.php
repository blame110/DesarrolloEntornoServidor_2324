<?php

namespace model;

use PDOException;

class Direccion
{



    /**
     * Devuelve un array 
     */
    public static function getDireccionProvPag($con, $provincia, $numPag,$numElem)
    {

        try {
            //Realizamos una query
            //$query = "SELECT direcciones.* FROM direcciones where direcciones.idProvincia = :idProvincia";

            $query = "SELECT direcciones.* FROM direcciones, provincias 
            where provincia.nombre = :provincia 
            and provincia.id = direcciones.idProvincia
            limit :numElem offset :offset";

            //Prepararmos la ejecucion de la sentencia (statement stmt)
            $stmt = $con->prepare($query);

            //Asociamos el valor del parametro idproducto a la posicion de :id
            $stmt->bindValue(':provincia', $provincia);
            $stmt->bindValue(':numElem', $numElem);
            $stmt->bindValue(':offset', ($numPag-1)*$numElem);

            //Ejecutamos la query
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


       /**
     * Devuelve un array 
     */
    public static function getDireccionPais($con, $pais)
    {

        try {
            //Realizamos una query
            $query = "SELECT direcciones.* FROM direcciones, pais where pais.nombre = :pais and pais.id = direcciones.idPais";

            //Prepararmos la ejecucion de la sentencia (statement stmt)
            $stmt = $con->prepare($query);

            //Asociamos el valor del parametro idproducto a la posicion de :id
            $stmt->bindValue(':pais', $pais);

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

      /**
     * Devuelve un array 
     */
    public static function getDirecciones($con)
    {

        try {
            //Realizamos una query
            $query = "SELECT * FROM direcciones";

            $resultado = $con->query($query);

            //FetchAll nos saca todos los registros de la query
            //El fetchall no se puede utilizar mas de una vez
            $resulSet = $resultado->fetchAll();

        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //Devolvemos los datos de la query
        return $resulSet;

    }

}
