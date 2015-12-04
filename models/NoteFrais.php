<?php

class NoteFrais {
    
    private $id_user ;
    private $listeFrais ;
    
    public function __construct($id_user){
        $this->id_user = $id_user ;
        $this->listeFrais = array(Frais);
    }
    public function __destruct() {
        
    }
    
    
}
