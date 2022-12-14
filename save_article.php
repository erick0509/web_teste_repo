<?php  
    function idExist($id){
        $exist=false;
        $dom = new DOMDocument('1.0', 'utf-8');
        $xml = file_get_contents('article.xml');
        @$dom->loadHTML($xml);
        $a = $dom->getElementsByTagName('article');
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
    $carticle=setId();
    $article->setAttribute("code_article",$carticle);
    $dispo_commande->appendChild($article);
    $article->appendChild($xml->createElement('designation', $_POST['designation']));
    $article->appendChild($xml->createElement('prix_unitaire', $_POST['prix_unitaire']));
    $article->appendChild($xml->createElement('type', $_POST['type']));
    $xml->getElementsByTagName('dispo_commande')->item(0)->appendChild($article);
    $xml->save('article.xml');
    //ajouter des info dans stock.xml
    $xmlStock= new DOMDocument('1.0','utf-8');
    $xmlStock->formatOutput=true;
    $xmlStock->preserveWhiteSpace=false;
    $xmlStock->load('stock.xml');
    $depotStock=$xmlStock->createElement('depot_de_stock');
    $stock=$xmlStock->createElement('stock');
    $stock->setAttribute('code_depot',$_POST['code_depot']);
    $stock->setAttribute('code_article',$carticle);
    $xmlStock->appendChild($stock);
    $stock->appendChild($xmlStock->createElement('quantite_en_stock', $_POST['quantite']));
    $stock->appendChild($xmlStock->createElement('quantite_en_reserve','0'));
    $xmlStock->getElementsByTagName('depot_de_stock')->item(0)->appendChild($stock);
    $xmlStock->save('stock.xml');
    header("location:article.xml");
?>