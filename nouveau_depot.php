<!DOCTYPE html>
<html>
    <head>
        <title>page d'accueil</title>
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
                            <form method="POST" class="form-horizontal col-md-offset-3 col-md-6" style="padding-top:150px;" action="save_depot.php">
                                <div class="form-group">
                                    <legend>Ajouter un nouveau depot de stock </legend>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-6">code du nouveau depot : </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="codeDepot">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-6">description  : </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-8">
                                        <button class="btn btn-info form-control">
                                            <span class="glyphicon glyphicon-ok-sign"></span>
                                            enregistrer le depot de stock
                                        </button>
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