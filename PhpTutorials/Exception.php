<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Exception Handling</title>
</head>
<body>
    <?php
    function Divide($dividend, $divisor){
        if($divisor == 0){
            throw new Exception ("Divisor is zero.<br>");
        }
        return $dividend / $divisor;
    }

    try{
        Divide(5, 0);
    }
    catch(Exception $e){
        echo "Unable to Divide.<br>";
    }
    finally{
        echo "Process Complete.<br>";
    }
    
    ?>
    
</body>
</html>