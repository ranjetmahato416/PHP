<html>
    <body>
        
    <?php
    function my_callback($item){
        return strlen($item);
    }

    //call back in user defined function
    function exclaim($str){
        return $str. '!';
    }

    function ask($str){
        return $str. '?';
    }
    function printFormatted($str, $format){
        //calling the format call back function
        echo $format($str);
    }

    
    $string = ['car', 'bike', 'truck', 'plane'];
    $string2 = ['orange', 'apple', 'grape', 'banana'];
    $length = array_map("my_callback", $string);
    //anonymous function
    $length1 = array_map(function($item){return strlen($item);}, $string2);
    print_r($length);
    print_r($length1);

    //pass the functions as callback functions to printFormat()
    printFormatted("Hello World", "exclaim");
    printFormatted("Howdy", "ask"); 
    ?>
    </body>
</html>