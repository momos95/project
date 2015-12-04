<?php

class User {
    
    private $id ;
    private $nom ;
    private $prenom ;
    private $login ;
    private $mdp ;
    private $email ;
    private $profil_id ;
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees) ;
    }
    public function __destruct() {
        
    }
    
    public function setId($id){
        $this->id = $id ;
    }
    public function setNom($nom){
        $this->nom = $nom ;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom ;
    }
    public function setLogin($login){
        $this->login = $login ;
    }
    public function setMdp($mdp){
        $this->mdp = $mdp ;
    }
    public function setEmail($email){
        $this->email = $email ;
    }
    public function setProfil_id($profil_id){
        $this->profil_id = $profil_id ;
    }

    public function getId(){
        return $this->id ;
    }
    public function getNom(){
        return $this->nom ;
    }
    public function getPrenom(){
        return $this->prenom ;
    }
    public function getLogin(){
        return $this->login ;
    }
    public function getMdp(){
        return $this->mdp ;
    }
    public function getEmail(){
        return $this->email ;
    }
    public function getProfil_id(){
        return $this->profil_id ;
    }
    
    private function hydrate(array $donnees){  
    
        foreach ($donnees as $key => $value){

            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)){
              // On appelle le setter.
              $this->$method($value);
            }
        }
    }
}