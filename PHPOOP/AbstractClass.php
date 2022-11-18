<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Abstract Class</title>
</head>
<body>
    <?php
    //Parent class
    abstract class Car{
        public $model, $color;
        function __construct($color, $model){
            $this->model = $model;
            $this->color = $color;
        }

        abstract public function intro() : string;
        
    }

    //Child Class inheriting from Class Car
    class Dodge extends Car{
        public function intro(): string {
            return 'i like ' .$this->color. " " .$this->model;
        }
    }

    class Ford extends Car{
        public function intro(): string {
            return 'i like ' .$this->color. " " .$this->model;
        }
    }


    abstract class Exterior{
        public $model;
        function __construct($model){
            $this->model = $model;
        }
        
        abstract function Color(): string;
    }
    class Design extends Exterior{
        public function Color() : string{
            if($this->model == 'challenger'){
                return 'Black ' .$this->model;
            }
            elseif($this->model == 'camaro'){
                return 'Yellow ' .$this->model;
            }
            elseif($this->model == 'tesla'){
                return "gray " .$this->model;
            }
        }
    }

    $vehicle = new Dodge('black', 'challenger');
    echo $vehicle->intro();
    echo '<br>';
    $vehicle2 = new Ford('yellow', 'camaro');
    echo $vehicle2->intro();
    echo '<br>';

    $intro = new Design("challenger");
    echo $intro->Color();
    ?>
    
</body>
</html>