<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>SuperGlobal</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST['fname'];
        if(empty($name)){
            echo "Name Field is Empty.";
        }
        else{
            echo $name;
        }
    }
    ?>
    
</body>
</html>