<?php

interface IManagerDAO extends IUsersDAO{
    
    //La liste des agents qu'il gère.
    public function getListAgent() ;
    
    //Pour valider une note de frais.
    public function validerNoteFrais(NoteFrais $note);
    
    //Pour refuser une note de frais.
    public function rejeterNoteFrais(NoteFrais $note);
    
}
