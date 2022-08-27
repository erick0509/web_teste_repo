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
                            <form class="form-horizontal col-md-offset-3 col-md-6" method="POST" action="save_article.php">
                                <div class="form-group">
                                    <legend>Nouveau article disponnible</legend>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-4">Designation:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="designation">
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-4">Prix Unitaire: </label>
                                        <div class="col-md-8 ">
                                            <div class="input-group">
                                                <input type="texte" class="form-control" style="text-align:right" name="prix_unitaire">
                                                <span class="input-group-addon">Ar</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-4">Type: </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="type">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-4">code de depot: </label>
                                        <div class="col-md-8">
                                            <select class="form-control" name='code_depot'>
                                                <?php
                                                    $dom = new DOMDocument('1.0', 'utf-8');
                                                    $xml = file_get_contents('depot.xml');
                                                    @$dom->loadHTML($xml);
                                                    $a = $dom->getElementsByTagName('emplacement');
                                                    for ($i=0; $i < $a->length; $i++) {
                                                        $attr = $a->item($i)->getAttribute('code_depot');
                                                        ?><option> <?php echo $attr ;?> </option> <?php 
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-4">quantite : </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="quantite">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-4 col-md-8">
                                        <button class="btn btn-info form-control">
                                            <span class="glyphicon glyphicon-ok-sign"></span>
                                            enregistrer ce cet article
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