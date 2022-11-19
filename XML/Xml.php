<!DOCTYPE html>
<html lang="en">
<head>
    <title>XML in PHP</title>
</head>
<body>
    <?php
    libxml_use_internal_errors(true);
    $myXmlData = 
    "<?xml version = '1.0' encoding = 'UTF-8'?>
    <note>
    <to>Anjal</to>
    <from>Ranjeet</from>
    <heading>Reminder</heading>
    <message>Don't forget to call me!</message>
    </note>";

    //reading xml data from a string
    $xml = simplexml_load_string($myXmlData) or die("Error: Cannot parse xml.");

    //Accessing the node values from xml 
    echo $xml->from. '<br>';
    $xml2 = simplexml_load_file("books.xml") or die("Error: Cannot Load xml file.");

    //Error Handling
    if($xml2 == false){
        echo "Failed to load xml.<br>";
        foreach(libxml_get_errors() as $error){
            echo '<br>' .$error->message;
        }
    }
    else{
        //Get Node value of specific Element
        echo $xml2->book[0]->title. '<br>';

        //Get Attribute value of specific Element
        echo $xml2->book[2]['category']. '<br>';  
        echo $xml2->book[2]->title['lang']. '<br>';  

        //Get Node value - loop
        foreach($xml2->children() as $book){
            echo $book->title. ', ';
            echo $book->author. ', ';
            echo $book->year. ', ';
            echo $book->price. '<br>';
        }
    }
    print_r($xml);
    ?>
    
</body>
</html>