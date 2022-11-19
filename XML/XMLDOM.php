<!DOCTYPE html>
<html lang="en">
<head>
    <title>XML DOM Parser</title>
</head>
<body>

<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load('note.xml');
$x = $xmlDoc->documentElement;
foreach($x->childNodes as $item){
    print $item->nodeName. ' : ' .$item->nodeValue. '<br>';
}

print $xmlDoc->saveXML();
?>
    
</body>
</html>