<?php
//$txt = "W3School.com";
//echo "I love $txt!" . "<br>";
//echo "I love ". $txt . "!";

//$x = 5;
//$y = 6;
//$z = $x + $y;
//echo $z;

//$x = 5;
//function myTest($y){
//    $x = 10;
//    echo "Variable x inside function is: $x";
//}
//
//myTest(20);
////echo "Variable x inside function is: $x";
///
///

$x = 10;
$y = 10;

//function myTest(){
////    global $x, $y;
////    $y += $x;
//    $GLOBALS['y'] += $GLOBALS['x'];
//}
//
//myTest();
//echo $y;

//function myTest()
//{
//    static $x = 0;
//    echo $x . "<br>";
//    $x++;
//}
//
//myTest();
//myTest();
//myTest();


//$x = 10.35;
//$y = true;
//$z = array('Volvo', 'BMW', 'Toyota');
//var_dump($x);
//var_dump($y);
//var_dump($z);

class Car{
    public string $model;
    function _construct(){
        $this->model = "VW";
    }
}

$herbie = new Car();
echo $herbie->model;
?>