<?php
session_start();
include_once './controllers/regles.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title>B.E | New User</title>
    </head>
    <body>
        
        <?php include "./commun/header.php" ; ?>
        
        <div class="container body-content">
        
            <br>
            
            <h2>Inscription</h2>
            
            <hr/>
            
            <div>
            
            <div class="col-md-6">
                
                <section id="loginForm">
                    
                    <form class="form-horizontal" method='POST' action="controllers/RegisterController.php">
                        
                        <div class="form-group">
                            <label class="col-md-10 text-danger"><strong><?=isset($_POST['erreur_login']) ? $_POST['erreur_login'] : "";?></strong></label>  
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nom: </label>                            
                            <div class="col-md-6">    
                                <input type="text" class="form-control" name="txtNom">
                            </div>
                        </div>
                        
                        <div class="form-group">     
                            <label class="col-md-4 control-label">Prénom: </label>                            
                            <div class="col-md-6">    
                                <input type="text" class="form-control" name="txtPrenom">
                            </div>
                        </div>                        
                        
                        <div class="form-group">     
                            <label class="col-md-4 control-label">Identifiant: </label>                            
                            <div class="col-md-6">    
                                <input type="text" class="form-control" name="txtId">
                            </div>
                        </div>
                        
                        <div class="form-group">     
                            <label class="col-md-4 control-label">Mot De Passe: </label>                            
                            <div class="col-md-6">    
                                <input type="password" class="form-control" name="txtMdp">
                            </div>
                        </div>
                        
                        <div class="form-group">     
                            <label class="col-md-4 control-label">Email: </label>                            
                            <div class="col-md-6">    
                                <input type="text" class="form-control" name="txtMail">
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-10">
                                <input type="submit" value="Inscription" class="btn btn-primary" name='btnInscr'/>
                            </div>
                        </div>
                    </form>
                    
                 </section>
                    <br>
                    <?php include './commun/footer.php'; ?>
                </div>    
            </div>
            
    </body>
</html>
