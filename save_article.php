<?php  
    function idExist($id){
        $exist=false;
        $dom = new DOMDocument('1.0', 'utf-8');
        $xml = file_get_contents('article.xml');
        @$dom->loadHTML($xml);
        $a = $dom->getElementsByTagName('dispo_commande');
        for ($i=0; $i < $a->length; $i++) {
            $attr = $a->item($i)->getAttribute('code_article');
            if($id==$attr){
                $exist=true;
                continue;
            }
        }
        return $exist;
    }
    function setId(){
        $id=1;
        while(idExist($id)){
            $id=$id+1;
        }
        return $id;
    }
    //ajouter des info dans article.xml
    $xml = new DOMDocument('1.0', 'utf-8');
    $xml->formatOutput = true;
    $xml->preserveWhiteSpace = false;
    $xml->load('article.xml');
    $dispo_commande = $xml->createElement('dispo_commande');
    $article=$xml->createElement('article');
    $article->setAttribute("code_article",setId());
    $article->setAttribute("code_depot",$_POST['code_depot']);
    $dispo_commande->appendChild($article);
    $article->appendChild($xml->createElement('designation', $_POST['designation']));
    $article->appendChild($xml->createElement('prix_unitaire', $_POST['prix_unitaire']));
    $article->appendChild($xml->createElement('type', $_POST['type']));
    //$article->appendChild($xml->createElement('quantite', $_POST['quantite']));
    $xml->getElementsByTagName('dispo_commande')->item(0)->appendChild($article);
    $xml->save('article.xml');
    //ajouter des info dans stock.xml
    $xmlStock= new DOMDocument('1.0','utf-8');
    $xmlStock->formatOutput=true;
    $xmlStock->preserveWhiteSpace=false;
    $xmlStock->load('stock.xml');
    $depotStock=$xmlStock->createElement('depot_de_stock');
    $stock=$xmlStock->createElement('stock');
    $xmlStock->appendChild($stock);
    header("location:article.xml");
?>