<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Interface Implementation</title>
</head>
<body>
    <?php
    //Interface definition

use Greeting as GlobalGreeting;

    interface Animal{
        function sound();
    }

    //Class definition
    class Dog implements Animal{
        function sound()
        {
            echo "Dog says bow.<br>";
        }
    }

    class Pig implements Animal{
        function sound()
        {
            echo "Pig says quiq.<br>";
        }
    }

    class Cat implements Animal{
        function sound()
        {
            echo "Cat says meo.<br>";
        }
    }

    $dog = new Dog();
    $pig = new Pig();
    $cat = new Cat();
    $animals = array($dog, $pig, $cat);
    foreach($animals as $animal){
        $animal->sound();
    }

    //Trait definition
    trait message1{
        function msg1(){
            echo "Welcome!<br>";
        }
    }

    trait message2{
        function msg2(){
            echo "GoodBye!<br>";
        }
    }

    //class inheriting from trait classes
    class Greeting{
        use message1;
    }

    class Bye{
        use message2;
    }

    $grt = new Greeting();
    $grt->msg1();
    echo '<br>';

    $bye = new Bye();
    $bye->msg2();
    echo '<br>';
    ?>
    
</body>
</html>