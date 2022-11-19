<!DOCTYPE html>
<html lang="en">
<head>
    <title>Static Method Example</title>
</head>
<body>
    <?php

    class Greeting{
        static function Welcome(){
            echo "Welcome Home!<br>";
        }

        static function Bye(){
            echo "GoodBye!<br>";
        }
        
        //Calling static method from another method in same class
        function __construct(){
            self :: Welcome();
        }

        //Protected static class
        protected static function Announce(){
            echo "All my fellas.<br>";
        }
    }

    class Bye{
        function message(){
            //calling static method from other method in other class
            Greeting::Bye();
        }
    }

    class Announce extends Greeting{
        public $announce;
        function __construct()
        {
            $this->announce = parent :: Announce();
        }
    }
    //Call static method
    // Greeting :: Welcome();
    new Greeting();
    $bye = new Bye();
    $bye->message();
    new Announce();
    ?>

    <div>
        <?php
        class Circle{
            static $pi = 3.14;
            public $radius;
            function Area($radius){
                $rsqr = pow($radius,2);
                return ($rsqr* self :: $pi);
            }
        }

        class Eclispse extends Circle{

            function Area($radius){
                return (4*$radius*parent :: $pi);
            }
        }
        //Get the value of static property via child class
        echo Eclispse :: $pi;
        echo '<br>';
        $circle = new Circle();
        echo $circle->Area(4);
        echo '<br>';

        $eclipse = new Eclispse();
        echo $eclipse->Area(3);
        echo '<br>';
        ?>
    </div>
    
</body>
</html>