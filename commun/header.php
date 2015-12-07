


<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <?php 
            if(isset($_SESSION['is_user'])){?>
                <li><a href="accueil.php" class = "navbar-brand">Business Expenses</a></li>
            <?php }
            else{?>
                <li><a href="index.php" class = "navbar-brand">Business Expenses</a></li>
            <?php }    
        ?>
                
        </div>
        
    <div class="navbar-collapse collapse">
<?php
//Une fois connecté : on a pas besoin de ça.
    if(!isset($_SESSION['is_user'])){?>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="apropos.php">A Propos</a></li>
            <li><a href="contacts.php">Contacts</a></li>
        </ul>

    <?php }
            
            //Si on est connecté : possibilité de voir notre note de frais et de changer les param.
            if(isset ($_SESSION['is_user']) && $_SESSION['is_user']){?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Mes Notes de Frais</a></li>
                    <li><a href="">Paramètres</a></li>
                    <li><a href="">Statisques</a></li>

                    <li><a href="controllers/logoutController.php">Déconnexion</a></li>

                    <li><a href="../../controllers/logoutController.php">Déconnexion</a></li>

                </ul>
            <?php }
            
            //Pour que notre uitlisateur puisse se connecter
            if(!isset ($_SESSION['is_user']) || !(isset($_SESSION['is_user']) && $_SESSION['is_user'] )){
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Connexion</a></li>
                </ul>
            <?php }
            
            //Pour Que l'admin puisse ajouter un nouvel Utilisateur.
            if(isset($_SESSION['is_user']) && $_SESSION['user_profil'] == 3){
             ?>
                <ul class="nav navbar-nav navbar-right">
                     <!--<li><a href="inscription.php">Utilisateurs</a></li>
                     <li><a href="">Managers</a></li>
                     <li><a href="">Catégories</a></li>
                     <li><a href="">Devises</a></li>-->
                     <li><a href="views/admin/usersCheck.php">Administration</a></li>
                </ul>
            <?php }
        ?>
    </div>
        
  </div>
</div>
