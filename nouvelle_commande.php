<!DOCTYPE html>
<html>
    <head>
        <title>ajouter un nouveau client</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/nouveau_client.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 corps">
                    <header class="row page-header">
                        <div class="col-md-offset-1 col-md-10 titre"><h1>GESTION DE COMMANDES</h1></div>
                    </header>
                    <aside>
                        <div class="row">
                            <form class=" col-md-12" method="POST" action="save_commande.php">
                                <div class="form-group">
                                    <legend>Passer une nouvelle commande</legend>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-1">client: </label>
                                        <div class="col-md-2">
                                            <input type="text" name="nom" class="form-control input-sm" >
                                        </div>
                                        <label class="col-md-2">date de commande: </label>
                                        <div class="col-md-2">
                                            <input type="date" name="adresse" class="form-control input-sm">
                                        </div>
                                        <label class="col-md-2">date de livraison: </label>
                                        <div class="col-md-2">
                                            <input type="date" name="age" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-1">article: </label>
                                        <div class="col-md-2">
                                            <input type="text" name="nom" class="form-control input-sm" >
                                        </div>
                                        <label class="col-md-2">date de commande: </label>
                                        <div class="col-md-2">
                                            <input type="date" name="adresse" class="form-control input-sm">
                                        </div>
                                        <label class="col-md-2">date de livraison: </label>
                                        <div class="col-md-2">
                                            <input type="date" name="age" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>     
                            </form>
                        </div>
                    </aside>
                    <?php include('footer.php');?>
                </div>
            </div>
        </div>
    </body>
</html>