<?php


class DataAccessObjectImpl implements IDataAccessObject{
    
    private $loginBdd = "root";
    private $mdpBdd = "";
    private $nom_base ="gestion_note_de_frais";
    private $host_base ="localhost";
    private $base ;
    
    public static function connectBase() {
        try {
            $this->base = new PDO ( 'mysql:host='.$this->host_base.';dbname='.$this->nom_base, $this->loginBdd, $this->mdpBdd );
        }catch ( PDOException $e ) {
            die ( 'Erreur : ' . $e->getMessage () );
        }
        $this->base->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        return $this->base ;
    }
    
    public static function closeBase() {
            $this->base.closeCursor();               
    }
    
}
