<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-celurean.css">
        <title>B.E | Accueil </title>
    </head>
    <body>
        
        <?php include "./commun/header.php" ; ?>
        
        <div class="container body-content">
            
            <p> Bonjour <?=print_r($_SESSION['user']); ?> </p>
           
        </div>
        
    </body>
    
</html>
