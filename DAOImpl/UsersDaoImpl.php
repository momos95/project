<?php


class UsersDaoImpl implements IUserDAO{
  
    protected $base ;


    public function __construct() {
        $this->base = DataAccessObjectImpl::connectBase();
    }
    
    
    public function ajouterFrais(Frais $frais,  NoteFrais $note) {
    
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

    public function estUser(\User $user) {
       $sql = "SELECT * FROM users where login = ? and mdp = ?";
       $req = $this->base->prepare($sql);
       $req->execute(array($user->getLogin(),$user->getMdp()));
       $res = $req->fetch();
       return !empty($res['login']);
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

//put your code here
}
