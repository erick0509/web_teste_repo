<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
    <html>
        <head>
            <title>liste de tout les clients</title>
            <link href="css/bootstrap.min.css" rel="stylesheet"/>
            <link href="css/client.css" rel="stylesheet"/>
        </head>
        <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <header class="row page-header">
                        <div class="col-md-offset-1 col-md-10 titre"><h1>GESTION DE COMMANDES</h1></div>
                    </header>
                    <aside class="table-responsive">
                        <table class="table table-bordered table-striped ">
                            <caption>
                                <h4>Liste de tout les clients</h4>
                            </caption>
                            <thead>
                                <tr>
                                    <th>id</th>                                 
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Adresse</th>
                                    <th>Age</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <xsl:for-each select="personne/client">
                                <tr class="active"> 
                                    <td style="color:red;"><xsl:value-of select="@id"/></td>                 
                                    <td><xsl:value-of select="nom"/></td>
                                    <td><xsl:value-of select="prenom"/></td>
                                    <td><xsl:value-of select="adresse"/></td>
                                    <td><xsl:value-of select="age"/></td>
                                    <td><xsl:value-of select="email"/></td>                            
                                </tr>
                                </xsl:for-each>
                            </tbody>
                        </table>
                    </aside>
                    <footer class="row">
                        <div class="col-md-12">
                            <ul class="list-inline">
                                <li><small><a href="client.xml">liste de tous les clients</a></small></li>
                                <li><small><a href="depot.xml">liste de tous les depots disponnible</a></small></li>
                                <li><small><a href="article.xml">liste de tous les articles disponnible</a></small></li>
                                <li><small><a href="#">liste de tout les commandes effectue</a></small></li>
                                <li><small><a href="#">parametre des informations d'un client</a></small></li>
                                <li><small><a href="#">parametre des informations d'un article</a></small></li>
                                <li><small><a href="#">a propos</a></small></li>
                                <li><small><a href="index.php">page d'accueil</a></small></li>
                            </ul>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
    </html>
</xsl:template>
</xsl:stylesheet>
