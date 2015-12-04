<?php

class Frais {
    
    private $id ;
    private $id_categorie ;
    private $montant ;
    private $id_devise ;
    private $commentaire ;
    private $date_frais ;
    
    
    public function __construct(array $donnees) {
        $this->hydrate($donnees) ;
    }
    
    public function __destruct() {
        
    }
    
    public function setId($id){
        $this->id = $id ;
    }

    public function setId_categorie($id_categorie){
        $this->id_categorie = $id_categorie ;
    }
    
    public function setMontant($montant){
        $this->montant = $montant ;
    }
    public function setId_devise($id_devise){
        $this->id_devise = $id_devise ;
    }
    public function setCommentaire($commentaire){
        $this->commentaire = $commentaire ;
    }
    public function setDate_frais($date){
        $this->date_frais = $date ;
    }

    public function getId(){
        return $this->id ;
    }
    public function getId_categorie(){
        return $this->id_categorie ;
    }
    public function getMontant(){
        return $this->montant;
    }
    public function getId_devise(){
        return $this->id_devise ;
    }
    
   public function getCommentaire(){
       return $this->commentaire ;
   }
   public function getDate_frais(){
       return $this->date_frais ;
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
