<?php
include_once '../DAOImpl/UsersDaoImpl.php' ;
include_once '../models/User.php';

$ok_submit = isset($_POST['submit']) ;
$ok_login = isset($_POST['login']) && !empty($_POST['login']) ;
$ok_mdp = isset($_POST['mdp']) && !empty($_POST['mdp']) ;

$erreur_login = "";

if($ok_submit){
    if($ok_login && $ok_mdp){// Login et MDP renseignés.
        
        $login = htmlspecialchars($_POST['login']) ;
        $mdp = htmlspecialchars($_POST['mdp']) ;
        
        $manip = new UsersDaoImpl();
        
        $ok_user = $manip->estUser($login, $mdp);
                
         if($ok_user){ // S'il est dans la base.
             
             $donnees = $manip->getUser($login) ;
             $user = new User($donnees) ;
             
             session_start();
             $_SESSION['is_user'] = TRUE ;
             $_SESSION['user'] = $user ;
             $_SESSION['user_profil'] = $user->getProfil_id();
             
             header("Location: ../accueil.php");
         }
         
         else{// Le couple (login,mdp) n'est pas reconnu.
             $erreur_login = "<strong>Mot De Passe et/ou Identifiants incorrects.</strong>";
             header("Location: ../login.php?erreur_login=$erreur_login");
             exit();
         }
    }
    else{// Les champs ne sont pas renseignés ou sont incorrects.
        $erreur_login = "<b>Données incorrectes.</b>";
        header("Location: ../login.php?erreur_login=$erreur_login");
        exit();
    }
}
else{
    $erreur_login = "<b>Erreur Fatale : Attention!!!</b>";
    header("Location: ../login.php?erreur_login=$erreur_login");
    exit();
}