 <?php
    $xml = new DOMDocument('1.0', 'utf-8');
    $xml->formatOutput = true;
    $xml->preserveWhiteSpace = false;
    $xml->load('depot.xml');
    $depot = $xml->createElement('depot');
    $emplacement=$xml->createElement('emplacement');
    $description=$xml->createElement("description",$_POST['description']);
    $emplacement->setAttribute("code_depot",$_POST['codeDepot']);
    $emplacement->appendChild($description);
    $depot->appendChild($emplacement);
    $xml->getElementsByTagName('depot')->item(0)->appendChild($emplacement);
    $xml->save('depot.xml');
    header("location:depot.xml");
?>