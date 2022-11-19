<!DOCTYPE html>
<html lang="en">
<head>
    <title>Expat Event-Based Parser</title>
</head>
<body>
    <?php

    //Initialize the xml parser
    $parser = xml_parser_create();

    //Function to use at the start of the element
    function start($parser, $element_name, $element_attrs){
        switch($element_name){
            case "NOTE":
                echo "<--Note--><br>";
                break;
            case 'TO':
                echo "To: ";
                break;
            case 'FROM':
                echo "From: ";
                break;
            case 'REMINDER':
                echo "Heading: ";
                break;
            case 'MESSAGE':
                echo "Message: ";
                break;
        }
    }

    //Function to use at the end of an element
    function stop($parser, $element_name){
        echo '<br>';
    } 

    //Function to use when character is found
    function char($parser, $data){
        echo $data;
    }

    //Specify Element handler
    xml_set_element_handler($parser, 'start', 'stop');

    //Specify data handler
    xml_set_character_data_handler($parser, 'char');

    //Open xml file
    $fp = fopen('note.xml', 'r');

    //Read data
    while($data = fread($fp, 4096)){
        xml_parse($parser, $data, feof($fp)) or
        die(sprintf("XML Error: %s at Line %d",
        xml_error_string(xml_get_error_code($parser)),
        xml_get_current_line_number($parser)));
    }
    //Free Xml parser
    xml_parser_free($parser);
    ?>
    
</body>
</html>