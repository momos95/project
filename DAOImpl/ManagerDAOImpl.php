<?php

include_once '../IDAO/IManagerDAO.php' ;
include_once 'DataAccessObjectImpl.php' ;

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

    public function rejeterNoteFrais(\NoteFrais $note) {
        
    }

    public function validerNoteFrais(\NoteFrais $note) {
        $req = "UPDATE statut SET description='Valid�e' WHERE id = get";
    }

    public function ajouterFrais(\User $user) {
        $sql_frais = "INSERT INTO frais(id,id_categorie,montant,id_devise,commentaire,date_frais) VALUES (:id,:id_categorie,:montant,:id_devise,:commentaire,:date_frais)" ;
        
        $donnees = array(
            'id'            => $frais->getId(),
            'id_categorie'  => $frais->getId_categorie(),
            'montant'       => $frais->getMontant(),
            'id_devise'     => $frais->getId_devise(),
            'commentaire'   => $frais->getCommentaire(),
            'date_frais'    => $frais->getDate_frais()
        );
        
        try{
            $req_frais = $this->base->prepapre($sql_frais);
            $req_frais->execute($donnees) ;
        
        } catch (Exception $ex) {
            echo "Erreur Création Du Frais : $ex->getMessage()" ;
            return false;
        }
        
        $sql_addFrais = "INSERT into fraisdansnote(id_note,id_frais) VALUES (:id_note,:id_frais)";
        
        $data = array(
            'id_note'   => $note->getIdNote(),
            'id_frais'  => $frais->getId()
        );
        
        try {
            $req_addFrais = $this->base->prepare($sql_addFrais);
            $req_addFrais->execute($data);
        } catch (Exception $ex) {
            echo " Erreur : Ajout Frais dans Note de Frais : $ex->getMessage()" ;
            return false;
        }
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

    public function getFrais($id_frais) {
        $sql = "SELECT * FROM frais where id = ?";
        $req = $this->base->prepare($sql);
        $req->execute(array($id_frais));
        $res = $req->fetch();
        return $res ;
    }

    public function getNotesFrais(\User $user) {
        $sql = "SELECT * "
                . "FROM frais INNER JOIN fraisdansnote INNER JOIN notedefrais"
                . "where id = id_frais and id_note=note_id and id_user = ?";
        
        $req = $this->base->prepare($sql);
        $req->execute(array($user->getId()));
        $res = $req->fetch();
        return $res ;
    }

    public function modifierFrais(\Frais $frais) {
        
    }

    public function supprimerFrais(\Frais $frais) {
        
    }

}
?>