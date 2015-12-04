<?php


class UsersDaoImpl implements UserDAO{
  
    protected $base ;


    public function __construct() {
        $this->base = DataAccessObjectImpl::connectBase();
    }
    
    
    public function ajouterFrais(\User $user,Frais $frais) {
        
        
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
        
    }

    public function modifierFrais(\Frais $frais) {
        
    }

    public function supprimerFrais(\Frais $frais) {
        
    }

//put your code here
}
