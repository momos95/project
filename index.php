<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-celurean.css">
        <title>B.E | Connexion</title>
    </head>
    <body>
        
        <?php include "./commun/header.php" ; ?>
        
        <div class="container body-content">
        
            <br>
            
            <h2>Connexion</h2>
            
            <hr/>
            
            <div>
            
            <div class="col-md-6">
                
                <section id="loginForm">
                    
                    <form class="form-horizontal">
                        
                        <div class="form-group">
                            <label class="col-md-10 text-danger"><strong><?=isset($_POST['erreur_login']) ? $_POST['erreur_login'] : "";?></strong></label>  
                        </div>
                        
                        <div class="form-group">     
                            <label class="col-md-4 control-label">Identifiant: </label>                            
                            <div class="col-md-6">    
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">     
                            <label class="col-md-4 control-label">Mot De Passe: </label>                            
                            <div class="col-md-6">    
                                <input type="password" class="form-control">
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-10">
                                <input type="submit" value="Se Connecter" class="btn btn-primary" />
                                <input type="reset" value="Réinitialiser" class="btn btn-primary" />
                            </div>
                        </div>
                    </form>
                    
                 </section>
                
                </div>
            
                 <div class="col-md-4">
                    <section id="socialLoginForm">
                        <p>
                            <a href=""> S'inscrire en tant que nouvel utilisateur ? </a>
                        </p>
                        <p>
                            <a href=""> Identifiant et/ou mot de passe oublié(s) ?</a>
                        </p>
                    </section>
                </div>
        
                
            </div>
            
            
    </body>
</html>
