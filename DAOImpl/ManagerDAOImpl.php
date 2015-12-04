<?php

 class ManagerDAOImpl implements IManagerDAO {
    
    //obtenir tout les users
    public function getListAgent() {
        try{
            //$reponse est un array de toute les données de 
            $reponse = $this->connectBase()->query('SELECT * FROM users');
            
            return $reponse;         
        } catch (Exception $ex) {
            echo "Erreur : $ex->getMessage())" ;
        }
        
    }

    public function rejeterNoteFrais(NoteFrais $note) {
        
    }

    public function validerNoteFrais(\NoteFrais $note) {
        
    }

    public function ajouterFrais(\User $user) {
        
    }

    public function connectBase() {
        
        try {
            $conn = new PDO('mysql:host=localhost;dbname=gestion_notes_de_frais;charset=utf8',"root","");
            $conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            
            return $conn;
        } catch (Exception $ex) {
            echo "Erreur : $ex->getMessage())" ;

        }
        
    }

    public function connectUser(\User $user) {
        
    }

    public function getFrais($id_frais) {
        
    }

    public function getNotesFrais(\User $user) {
        
    }

    public function modifierFrais(\Frais $frais) {
        
    }

    public function supprimerFrais(\Frais $frais) {
        
    }

}
?>