<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>menu</title>
        <link rel="stylesheet" href="../css/bootstrap-cerulean.min.css"/>
    </head>
    <body>
        <div class="nav navbar-inverse navbar-fixed-top " >
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="?page=accueil">Acceuil</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="#">Gestion Client<b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li ><a href="?page=addclient">Ajouter un client</a></li>
                            <li><a href="?page=listeclient">lister les Clients</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="#">Gestion Fournisseur<b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="?page=addfournisseur">Ajouter un fournisseur</a></li>
                            <li><a href="?page=listefournisseur">lister les Fournsseurs</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="#">Gestion Commande<b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="?page=passercommande">Nouvelle Commande</a></li>
                            <li><a href="?page=consultercommande">Commande en cours</a></li>
                            <li><a href="?page=recherchercommande">Rechercher une Commande</a></li>
                        </ul>
                    </li>
                    <li><a href="?page=addfourniture">Gestion Fournitures</a></li>
                    <li><a href="?page=addfourniture">Gestion Stocks</a></li>
                    <li><a href="?page=addfourniture">Gestion Livraisons</a></li>
                    <li><a href="?page=addfourniture">Gestion Facturations</a></li>
                </ul>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <a href="../index.php" class="btn btn-info navbar-btn navbar-right">Deconnexion</a>
                </div>
            </div>
        </div>
        <br><br><br>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="../js/jquery.backstretch.min.js"></script>
        <script>
            $.backstretch("../img/arriere-plan.jpg", {speed: 500});
        </script>
    </body>
</html>