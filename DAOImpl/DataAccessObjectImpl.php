<?php

include_once '../IDAO/IDataAccessObject.php';

class DataAccessObjectImpl implements IDataAccessObject{
    
    public static function connectBase() {
        
        $loginBdd = "root";
        $mdpBdd = "";
        $nom_base ="gestion_notes_de_frais";
        $host_base ="localhost";
        
        try {
            $base = new PDO ( 'mysql:host='.$host_base.';dbname='.$nom_base, $loginBdd, $mdpBdd );
        }catch ( PDOException $e ) {
            die ( 'Erreur : ' . $e->getMessage () );
        }
        $base->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        return $base ;
    }
    
}
