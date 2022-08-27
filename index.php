<!DOCTYPE html>
<html>
    <head>
        <title>page d'accueil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/accueil.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <header class="row page-header">
                        <div class="col-md-offset-1 col-md-10 titre"><h1>GESTION DE COMMANDES</h1></div>
                    </header>
                    <aside>
                        <div class="row">
                            <div class="col-md-offset-3 col-md-6">
                                <a class="btn btn-success form-control" href="nouveau_client.php">
                                    <span class="glyphicon glyphicon-user pull-left"></span>
                                    Ajouter un nouveau client</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-md-6">
                                <a class="btn btn-success form-control" href="nouveau_depot.php">
                                    <span class="glyphicon glyphicon-map-marker pull-left"></span>
                                    Ajouter un nouveau depot de stock
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-md-6">
                                <a class="btn btn-success form-control" href="nouveau_article.php">
                                    <span class="glyphicon glyphicon-shopping-cart pull-left"></span>
                                    Ajouter un article disponnible
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-md-6">
                                <a class="btn btn-success form-control" href="nouvelle_commande.php">
                                    <span class="glyphicon glyphicon-calendar pull-left"></span>
                                    Passer des commandes
                                </a>
                            </div>
                        </div>
                    </aside>
                    <?php include('footerIndex.php');?>
                </div>
            </div>
        </div>
    </body>
</html>