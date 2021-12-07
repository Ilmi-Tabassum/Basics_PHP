<!DOCTYPE html>
<html>
<body>

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
$z=$x+$y;
$c=$z-$y;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo "addition  :";
echo $z;
echo  "<br>";
echo "subtraction  :";
echo $c;
?>
<?php
echo  "<br>";
$txt = "W3Schools.com";
echo "I love $txt!";
?>




<?php
$x = 5; // global scope

function myTest() {
//    // using x inside this function will generate an error
//    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<?php
$x = 5;
$y = 10;

function myTesting() {
    global $x, $y;
    $y = $x + $y;
}

myTesting();  // run function
echo "Output the new value for variable $y ";

?>

<?php

$x = 5;
$y = 20;

function Test() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

Test();
echo  "<br>";
echo  "<br>";
echo "Output the new value for variable $z ";
?>

<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
        $this->firstname =$model;
        $this->lastname = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";

    }

    public function message1() {

        return "My name is " .$this->firstname . " " .$this->lastname . "!";
    }
}
echo  "<br>";
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
echo  "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
echo  "<br>";
echo "<br>";
$myCar = new Car("ilmi", "tabassum");
echo $myCar -> message1();
?>

<?php
echo  "<br>";
$cars = array("Volvo","BMW","Toyota");
echo  "<br>";
var_dump($cars);
?>

<?php
$names = array("ilmi", "tabassum", "shorna");
echo count($names);

?>


</body>
</html>


