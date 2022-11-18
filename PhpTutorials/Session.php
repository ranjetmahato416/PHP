<?php
session_start();//Starting the session
$_SESSION['favCar'] = "Dodge";//setting the session variables
$_SESSION['favBike'] = "Ducati";
?>

<html>
    <body>
        <?php
        echo "<p>Favorate Car is " .$_SESSION['favCar']. "</p><br>";
        echo "<P>Favorate Bike is " .$_SESSION['favBike']. "</p>";

        print_r($_SESSION);
        echo '<br>';

        //remove all session variables
        session_unset();

        //destroying session
        session_destroy();

        print_r($_SESSION);
        ?>
    </body>
</html>