<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <title>B.E | Connexion</title>
    </head>
    <body>
        
        <?php include "./commun/header.php" ; ?>
        
        <div class="container body-content">
        
            <br>
            <br>
            
            <h2>Connexion</h2>
            
            <hr/>
            
            <div>
            
            <div class="col-md-6">
                
                <section id="loginForm">
                    
                    <form class="form-horizontal" method="post" action="controllers/loginController.php">
                        
                        <div class="form-group">
                            <label class="col-md-10 text-danger"><strong><?=isset($_GET['erreur_login']) ? $_GET['erreur_login'] : "";?></strong></label>  
                        </div>
                        
                        <div class="form-group">     
                            <label class="col-md-4 control-label">Identifiant: </label>                            
                            <div class="col-md-6">    
                                <input type="text" class="form-control" name="login">
                            </div>
                        </div>
                        
                        <div class="form-group">     
                            <label class="col-md-4 control-label">Mot De Passe: </label>                            
                            <div class="col-md-6">    
                                <input type="password" class="form-control" name="mdp">
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-10">
                                <input type="submit" value="Se Connecter" class="btn btn-primary" name="submit"/>
                                <input type="reset" value="Réinitialiser" class="btn btn-primary" />
                            </div>
                        </div>
                    </form>
                    
                 </section>
                
                </div>
            
                 <div class="col-md-4">
                     <br>
                    <section id="socialLoginForm">
                        <p>
                            <a href="inscription.php"> S'inscrire en tant que nouvel utilisateur ? </a>
                        </p>
                        <p>
                            <a href=""> Identifiant et/ou mot de passe oublié(s) ?</a>
                        </p>
                    </section>
                 </div>
            </div>
            
             
    </body>
</html>
