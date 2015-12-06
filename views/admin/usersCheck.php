<?php
session_start();
include_once '../../controllers/regles.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap-celurean.css">
        <title>B.E | Accueil </title>
    </head>
    <body>
        
        <?php include "../../commun/header.php" ; ?>
        
        <br>
        <br>
        
        <div class="container body-content">
            <hr>
            <div class="col-md-5 center-block"> 
                <div class="list-group">
                    <a href="#" class="list-group-item">Ajouter</a>
                    <a href="#" class="list-group-item">Supprimer</a>
                    <a href="#" class="list-group-item">Modifier</a>
                 </div>
            </div>
                    
        </div>
        
    </body>
    
</html>
