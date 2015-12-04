<?php

class NoteFrais {
    
    private $id_note;
    private $statut ;
    private $id_user ;
    private $listeFrais ;
    
    public function __construct($id_user){
        $this->id_user = $id_user ;
        $this->listeFrais = array(Frais);
    }
    
    public function setStatut(int $statut){
        $this->statut = $statut ;
    }
    public function setIdUser($id){
        $this->id_user = $id ;
    }
    
    public function setIdNote($idnote){
        $this->id_note = $idnote ;
    }
    
    public function getStatut(){
        return $this->statut ;
    }
    public function getIdNote(){
        return $this->id_note ;
    }
    public function getIdUser(){
        return $this->id_user ;
    }
    public function getListFrais(){
        return $this->listeFrais;
    }
    
    public function addFrais(Frais $frais){
        //$this.listFrais.add($frais);
    }
    
    public function __destruct() {
        
    }
    
    
}
