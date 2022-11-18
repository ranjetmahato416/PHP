<?php 
//Cookies
$cookie_name = "user";
$cookie_value = "anjal";
setcookie($cookie_name, $cookie_value, time()+6400, '/');
// setcookie("user1", "ashmita", time()+86400, '/');
//Delete a cookie
setcookie('user', '', time()-86400, '/');
?>


<html>
    <body>
        <?php

        if(count($_COOKIE)>0){
            echo "Cookie is enabled. <br>";
        }
        else{
            echo "Cookie is disbaled. <br>";
        }

        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie name '" .$cookie_name. "' is not set.";
        }
        else{
            echo "Cookie name is set to " .$cookie_name;
            echo '<br>';
            echo "Cookie Value is " .$_COOKIE[$cookie_name]. '<br>';
        }

        echo "Cookie is deleted."
         ?>
    </body>
</html>