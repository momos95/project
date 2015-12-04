<?php

class Profil {
    
    private $id ;
    private $description ;
    
    public function __construct($donnees) {
        $this->hydrate($donnees) ;
    }
    public function __destruct(){
     
    }
    
    public function setId($id){
        $this->id = $id ;
    }
    public function setDescription($description){
        $this->description = $description ;
    }
    
    public function getId(){
        return $this->id ;
    }
    public function getDescription(){
        return $this->description ;
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
