<?php

interface IAdminDAO extends IManagerDAO {
    
    //Changer Le statut d'un User
    public function changerStatutUser($user);
    
    //Modifier une devise
    public function modifierDevise($devise);
    
    //Supprimer une devise
    public function supprimerDevise($devise);
    
    //Ajouter un utlisateur
    public function ajouterUser();
    
    //Supprimer un utilisateur
    public function supprimerUser(User $user);
    
    //Modifier une catégorie
    public function modifierCategorie(Categorie $categorie);
    
    //Supprimer une catégorie
    public function supprimerCategorie(Categorie $categorie);
    
    //Ajouter une catégorie
    public function ajouterCategorie(Categorie $categorie);
    
}
