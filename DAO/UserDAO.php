<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author mamadou
 */
interface UserDAO {
     //Utilisateur existe dans la base.
    public function estUser(User $user);
    
    //Récupérer La liste des frais d'un user.
    public function getNotesFrais(User $user);
    
    //Récupérer un frais à partir de son ID.
    public function getFrais($id_frais) ;
    
    //Ajouter un frais.
    public function ajouterFrais(User $user);
    
    //Supprimer un frais.
    public function supprimerFrais(Frais $frais);
    
    //Modifier un frais
    public function modifierFrais(Frais $frais);
}
