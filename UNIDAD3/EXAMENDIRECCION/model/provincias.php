<?php 
namespace model;
use PDOException;

class Provincia {


     /**
     * Devuelve un array 
     */
    public static function getProvincias($con)
    {

        try {
            //Realizamos una query
            $query = "SELECT * FROM provincias";

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

?>