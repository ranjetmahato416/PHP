<?php
//Variables

$txt = "PHP programming";
/*echo "i love $txt";*/
$s=10;
$b=34;
echo $s+$b;
echo "<br>";

//Variable scope
//Global Scope
$a=20;
function test(){
    //Local Scope
    $c=10;
    global $a;
    $c= $a + $c;
    echo "The value of c is now $c";
}
echo $a;
test();
echo "<br>";

//echo vs print

echo "This", "Expression", "Was", "made", "with", "multiple", "lines";//Can take multiple arguments
echo "<br>";
print "I'am about to learn PHP!";//takes single arguments
echo "<br>";

//Data types
var_dump($s);
var_dump($txt);
echo "<br>";
echo strlen($txt);
echo "<br>";
echo str_word_count($txt);
echo "<br>";
echo strrev($txt);
echo "<br>";
echo strpos($txt, "programming");
echo "<br>"; 
echo str_replace("programming", "Framework", $txt);
echo "<br>";

//Objects
class Car{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $color = $color;
        $model = $model;
    }
    public function message($color, $model){
        return "I like ".$color. " " .$model."!";
    }
}
$myCar = new Car("black", "Dodge");
echo $myCar->message("black", "Dodge");
echo "<br>";

//Numbers
var_dump(is_int($s));
echo "<br>";
var_dump(is_float($s));
echo "<br>";

//Math Functions
echo pi();
echo "<br>";
echo sqrt(81);
echo "<br>";
$arr = array(20, 30, 22, 34, 50, 12, 11);
echo min($arr);
echo "<br>";
echo max($arr);
echo "<br>";
echo abs(-32);//Absolute
echo "<br>";
echo round(0.34);//round 0ff
echo round(0.82);
echo "<br>";
echo rand(10,50);
echo "<br>";

//Array
$arrLength = count($arr);
for($ar = 0; $ar< $arrLength; $ar++){
    echo $arr[$ar];
    echo "<br>";
} 

$age = array('Anjal'=> "25", "Ashmita"=> '22', "Bibash" => '23');
//$srtArrayLength = count($age);
echo "Bibash is ". $age['Bibash']. "Years old.";
echo "<br>";

asort($age);
echo "<br>";
foreach($age as $i => $i_value){
    echo "Key:". $i. " ,Age:" .$i_value;
    echo "<br>";
}


//Constants
define("Greeting", "Welcome" );
echo Greeting;
echo "<br>";
define('Cars', ['Dodge', "Lambo", 'Ferrari']);
function Test_cars(){
    echo Cars[1];
}
Test_cars();
echo "<br>";

//If_elseif_ else
if($s>10){
    echo "Have a nice day";
}
elseif($s<10){
    echo "Good Evening";
}
else{
    echo "good luck!";
}
echo "<br>";
//Switch statement
$favColor = 'red';
switch($favColor){
    case 'red' : echo 'Favorate Color is red.';
    break;
    case 'green' : echo 'Favorate color is green.';
    break;
    default: echo "Favorate color is white.";
    break;
}
echo "<br>";

//Loops
for($i = 0; $i<4; $i++){
    if($i == 3){
        break;
    }
    echo 'For loop executing';
    echo "<br>";
}
$j = 0;
while($j<4){
    echo 'While loop executing';
    echo "<br>";
    $j++;
}
do{
    echo 'Do_While loop executing.';
    
    echo "<br>";
    $j++;
}while($j<6);
echo "<br>";

//SuperGlobal 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

//RegEx
$str = "pickle papper scissor soccer";
$pattern1 = "/soccer/i";
echo preg_match($pattern1, $str);
echo "<br>";
$pattern2 = "/er/i";
echo preg_match_all($pattern2, $str);
echo "<br>";

?>