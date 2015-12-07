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
interface IUserDAO {
    
     //Utilisateur existe dans la base.
    public function estUser($login, $mdp);
    
    //Créer une note de frais 
    public function creerNoteFrais();
    
    //Récupérer La liste des frais d'un user.
    public function getNotesFrais(User $user);
    
    //Récupérer un frais à partir de son ID.
    public function getFrais($id_frais) ;
    
    //Ajouter un frais.
    public function ajouterFrais(Frais $frais, NoteFrais $note);
    
    //Supprimer un frais.
    public function supprimerFrais(Frais $frais);
    
    //Modifier un frais
    public function modifierFrais(Frais $frais);
    
    //Recupérer un User à partir de son login
    public function getUser($login);
}
