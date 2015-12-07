<?php
//Récupérer les variables de session.
session_start();
$_SESSION = array();

//Détruire toutes les variables de la session ainsi que la session.
session_destroy();

//Redirection vers la page d'accueil.
header('Location: ../index.php');