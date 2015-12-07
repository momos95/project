<?php

if(!isset($_SESSION['is_user'])){
    $index = "index.php" ;
    $erreur = "Vous devez vous connecter d'abord afin de visualiser la page demandée :<a href=$index> par ici </a>";
    header("Location: erreurVue.php?erreur=$erreur");
    exit();
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

