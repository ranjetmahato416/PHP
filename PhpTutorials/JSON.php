<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>JSON Example</title>
</head>
<body>
    <?php
    //Encoding to JSON object an associative array
    $color = array('Dodge'=> 'black', 'Camaro'=> 'Yellow', 'Tesla'=> 'Gray');
    echo json_encode($color);
    echo '<br>';
    $vehicle = array('Car', 'Bike', 'Train', 'Plane');
    echo json_encode($vehicle);
    echo '<br>';

    $JsonObj = '{"Camaro" : "Yellow", "Dodge" : "Black", "Tesla" : "Gray"}';//JSON data
    var_dump(json_decode($JsonObj));//decoding JSON data into a PHP object
    echo '<br>';
    var_dump(json_decode($JsonObj, true));// decodeing JSON data into a PHP associative array
    echo '<br>';

    $obj = json_decode($JsonObj);
    //Accessing the value from decoded PHP object
    echo $obj->Dodge. '<br>';
    echo $obj->Camaro. '<br>';

    $arr = json_decode($JsonObj, true);
    //Accessing the value from decoded PHP associative array
    echo $arr["Tesla"]. '<br>';

    //Loop through the value of decoded PHP object
    foreach($obj as $key => $value){
        echo $key. ' => ' .$value. '<br>';
    }
    ?>
    
</body>
</html>