<?php 
class Vehicle{
    //Properties
    public $color;
    public $model;

    //Methods
    // function set_color($color){
    //     $this->color = $color;
    // }

    //Constructor

    function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    function get_color(){
        return $this->color;
    }

    // function set_model($model){
    //     $this->model = $model;
    // }
    function get_model(){
        return $this->model;
    }

}

$dodge = new Vehicle('black', 'challenger');
$ford = new Vehicle('yellow', 'camaro');

// $dodge->set_color('black');
// $dodge->set_model('Challenger');
// $ford->set_color('yellow');
// $ford->set_model('camaro');

echo 'i like ' .$dodge->get_color(). ' ';

echo $dodge->get_model();
echo '<br>';
echo 'i also like ' .$ford->get_color(). ' ';

echo $ford->get_model();
echo '<br>';


//Inheritance
class Bike extends Vehicle{
    public $torque;

    function __construct($color, $model, $torque)
    {
        $this->color = $color;
        $this->model = $model;
        $this->torque = $torque;
    }

    function details(){
        echo 'i have ' .$this->get_color(). ' ' .$this->get_model(). ' with torque of ' .$this->torque. 'nm';
        echo '<br>';
    }
}

$yamaha = new Bike('black', 'R15', 120);
$yamaha->details();

//Overriding inherited methods

class Car extends Bike{
    function __construct($color, $model, $torque)
    {
        $this->color = $color;
        $this->model = $model;
        $this->torque = $torque;
        
    }
    function details()
    {
        echo "I like " .$this->color. " " .$this->model. ' with ' .$this->torque. ' nm';
        echo '<br>';
    }
}

$tesla = new Car('gray', 'S-plaid', '1200');
$tesla->details();
?>