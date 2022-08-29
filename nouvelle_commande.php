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
                                    <legend>Passer une nouvelle commande d'un client</legend>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-1">client: </label>
                                        <div class="col-md-2">
                                            <select style="font-size:8px;" class="form-control" name='client'>
                                                <?php
                                                    $dom = new DOMDocument('1.0', 'utf-8');
                                                    $xml = file_get_contents('client.xml');
                                                    @$dom->loadHTML($xml);
                                                    $a = $dom->getElementsByTagName('client');
                                                    $nom=$dom->getElementsByTagName('nom');
                                                    for ($i=0; $i < $a->length; $i++) {
                                                        $attr = $a->item($i)->getAttribute('id');
                                                        $attrnom=$nom->item($i)->nodeValue;
                                                        ?><option> <?php echo $attr.")".$attrnom?> </option> <?php 
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <label class="col-md-2">date de commande: </label>
                                        <div class="col-md-2">
                                            <input type="date" name="date_commande" class="form-control input-sm">
                                        </div>
                                        <label class="col-md-2">date de livraison: </label>
                                        <div class="col-md-2">
                                            <input type="date" name="date_livraison" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <legend>Ajouter une ligne de commande pour ce client</legend>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-1">article: </label>
                                        <div class="col-md-2">
                                            <input type="text" name="article" class="form-control input-sm" >
                                        </div>
                                        <label class="col-md-2">quantite commande: </label>
                                        <div class="col-md-2">
                                            <input type="text" name="quantite_commande" class="form-control input-sm">
                                        </div>
                                        <label class="col-md-2">quantite livre: </label>
                                        <div class="col-md-2">
                                            <input type="text" name="quantite_livre" class="form-control input-sm">
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