<?php
/********************************************************
 * Fichier header : commun � tous les utilsateurs       *
 * Sert d'entete de nos page (header) , affiche le menu *
 * selon le type de profil.                             *
 ********************************************************/
?>



<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        
       <?php 
        /************************************************
         * Lien de l'application selon la situation :   *
         *                                              *
         * Si on est connect� ---> vers accueil         *
         * Sinon : ----------> vers index               *
         * **********************************************/

        if(isset($_SESSION['is_user'])){?>
            <li><a href="/BusinessExpenses/accueil.php" class = "navbar-brand">Business Expenses</a></li>
        <?php }
        else{?>
            <li><a href="/BusinessExpenses/index.php" class = "navbar-brand">Business Expenses</a></li>
        <?php }    
    ?>
                
        </div>
        
    <div class="navbar-collapse collapse">
<?php

    /*******************************************************
     * PARTIE COMMUNE : MENU AVANT CONNEXION               *
     *                                                     *
     *******************************************************/

    if(!isset ($_SESSION['is_user']) || !(isset($_SESSION['is_user']) && $_SESSION['is_user'] )){
        ?>
        <ul class="nav navbar-nav">
            <li><a href="/BusinessExpenses/index.php">Accueil</a></li>
            <li><a href="/BusinessExpenses/apropos.php">A Propos</a></li>
            <li><a href="/BusinessExpenses/contacts.php">Contacts</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/BusinessExpenses/login.php">Connexion</a></li>
        </ul>

    <?php }
            
    /**************************************************************************************
     * PARTIE : Utilisateur connect�.                                                     *
     * Cette Partie est commune � tous les types de profil                                *
     * Possibilit� de voir notre note de frais, de changer les param et de se d�connecter.*
     **************************************************************************************/
     
    if(isset ($_SESSION['is_user']) && $_SESSION['is_user']){?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/BusinessExpenses/">Mes Notes de Frais</a></li>
            <li><a href="/BusinessExpenses/">Param�tres</a></li>
            <li><a href="/BusinessExpenses/controllers/logoutController.php">D�connexion</a></li>
        </ul>
     <?php }

    /*********************************************************
     * PARTIE MENU ADMIN   : id = 3                          *
     *                                                       *
     * Pour Que l'admin puisse ajouter un nouvel Utilisateur.*
     * Faire des manipulations sur les tables de la base et  *
     * voir les stastiques des frais des employ�s            *
     *********************************************************/

    if(isset($_SESSION['is_user']) && $_SESSION['user_profil'] == 'admin'){
     ?>
        <ul class="nav navbar-nav navbar-right">
             <li><a href="/BusinessExpenses/views/admin/usersCheck.php">Administration</a></li>
             <li><a href="/BusinessExpenses/">Statisques</a></li>
        </ul>
    <?php }
    
    if(isset($_SESSION['is_user']) && $_SESSION['user_profil'] == 'manager'){
     ?>
        <ul class="nav navbar-nav navbar-right">
             <li><a href="">Mes Agents</a></li>
        </ul>
    <?php }

        ?>

    </div>
        
  </div>
</div>
