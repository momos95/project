<?php
include_once 'models/User.php';
session_start();
 
include_once './controllers/regles.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title>B.E | Accueil </title>
    </head>
    <body>
        
        <?php include "./commun/header.php" ; ?>
        
        <br>
        <br>
        
        <div class="container body-content">

            <br>
            <br>
            <p> Bonjour <?= 
                            var_dump($_SESSION['user']); 
                            header("Location: controllers/ProfileController.php");
                        ?> </p>

            <hr>
            <p> Bonjour <?=print_r($_SESSION['user']); ?> </p>
           

        </div>
        
    </body>
    
</html>
