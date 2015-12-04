<!DOCTYPE html>
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
            
            <h2>Inscription</h2>
            
            <hr/>
            
            <div>
            
            <div class="col-md-6">
                
                <section id="loginForm">
                    
                    <form class="form-horizontal" method='POST'>
                        
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
                                <input type="reset" value="Réinitialiser" class="btn btn-primary" />
                            </div>
                        </div>
                    </form>
                    
                 </section>
                
                </div>
            </div>
            
            <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
            <div class="navbar-collapse collapse">
                <?php
                
                //if(isset ($_SESSION['is_user']) && $_SESSION['is_user']){
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Connexion</a></li>
                    <li><a href="">Inscription</a></li>
                    <li><a>Déconnexion</a></li>
                </ul> 
            </div>
            </div>
            </div>
                <?php
            
                //Contrôle si les champs sont vides
                $nom = isset($_POST['txtNom'])? $_POST['txtNom'] : "";
                $prenom = isset($_POST['txtPrenom'])? $_POST['txtPrenom'] : "";
                $login = isset($_POST['txtId'])? $_POST['txtId'] : "";
                $mdp = isset($_POST['txtMdp'])? $_POST['txtMdp'] : "";
                $email = isset($_POST['txtMail'])? $_POST['txtMail'] : "";


                if(!empty($nom) && !empty($prenom) && !empty($login) && !empty($mdp) && !empty($email)){

                    //Connexion au serveur
                    $conn = new PDO('mysql:host=localhost;dbname=gestion_notes_de_frais;charset=utf8',"root","");

                    $conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

                    $sql = "INSERT INTO users(nom,prenom,login,mdp,email,profil_id) VALUES (?,?,?,?,?,?)";

                    $req = $conn->prepare($sql);

                    try {
                        $req->execute(array($nom,$prenom,$login,$mdp,$email,1));
                    }catch(Exception $e){
                        echo "Erreur : $e->getMessage())" ;
                        exit();
                    }

                    echo "Votre compte a été crée" ; 
                    }
            ?>
            
            
    </body>
</html>
