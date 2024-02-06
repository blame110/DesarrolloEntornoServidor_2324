<?php 
namespace model;
use PDOException;

class Pais {

    /**
     * Devuelve un array 
     */
    public static function getPaises($con)
    {

        try {
            //Realizamos una query
            $query = "SELECT * FROM pais";

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