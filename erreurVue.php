<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title>B.E | Erreur </title>
    </head>
    
    <body>
        <?php 
            if(isset($_GET['erreur'])){
                echo $_GET['erreur'] ;
            }
        ?>
    </body>
</html>