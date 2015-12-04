<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <li><a href="" class = "navbar-brand">Business Expenses</a></li>
        </div>
        
    <div class="navbar-collapse collapse">
        
        <ul class="nav navbar-nav">
            <li><a href="">Accueil</a></li>
            <li><a href="">A Propos</a></li>
            <li><a href="">Contacts</a></li>
        </ul>
        
        <?php
            
            if(isset ($_SESSION['is_user']) && $_SESSION['is_user']){?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">Mes Notes de Frais</a></li>
                    <li><a href="">Paramètres</a></li>
                    <li><a>Déconnexion</a></li>
                </ul>
            <?php }
        ?>
    </div>
        
  </div>
</div>

<br><br>