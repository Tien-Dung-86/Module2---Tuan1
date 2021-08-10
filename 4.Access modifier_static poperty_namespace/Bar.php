<?php

//class Bar
//{
//    public function test()
//    {
//        $this->testPrivate();
//        $this->testPublic();
//    }
//
//    public function testPublic()
//    {
//        echo "Bar::testPublic\n";
//    }
//
//    private function testPrivate()
//    {
//        echo "Bar::testPrivate\n";
//    }
//}
//
//class Foo extends Bar
//{
//    public function testPublic()
//    {
//        echo "Foo::testPublic\n";
//    }
//
//    private function testPrivate()
//    {
//        echo "Foo::testPrivate\n";
//    }
//}
//
//$myFoo = new Foo();
//$myFoo->test();

//class MyClass
//{
//    // Declare a public constructor
//    public function __construct()
//    {
//    }
//
//    // Declare a public method
//    public function MyPublic()
//    {
//        echo "Public <br>";
//    }
//
//    // Declare a protected method
//    protected function MyProtected()
//    {
//        echo "Protected <br>";
//    }
//
//    // Declare a private method
//    private function MyPrivate()
//    {
//        echo "Private <br>";
//    }
//
//    // This is public
//    function Foo()
//    {
//        $this->MyPublic();
//        $this->MyProtected();
//        $this->MyPrivate();
//    }
//}
//
//$myclass = new MyClass;
//$myclass->Foo(); // Public, Protected and Private work

//class House
//{
//    // color of the house
//    private string $color;
//    // only these colors are allowed
//    private array $allowedColors = [
//        'black', 'blue', 'red', 'green'
//    ];
//
//    public function setColor($color): void
//    {
//        // Black to black (lowercase)
//        $color = strtolower($color);
//        if (in_array($color, $this->allowedColors)) {
//            // if $color is in the $allowedColors array
//            // we can set the color property
//            $this->color = $color;
//        }
//    }
//
//    public function getColor(): string
//    {
//        if ($this->color) {
//            // if color is set
//            return $this->color;
//        } else {
//            // show an error message
//            return 'No color is set. May be you have set a color which is not allowed';
//        }
//    }
//}
//
//// Example 1
//$house1 = new House();
//$house1->setColor('black');
//echo $house1->getColor();
//echo '<br>'; // a HTML line break to make it readable
//$house2 = new House();
//$house2->setColor('yellow'); // a not allowed color
//echo $house2->getColor();

//class Foo
//{
//    public static string $my_static = 'foo';
//
//    public function staticValue()
//    {
//        return self::$my_static;
//    }
//}
//
//class Bar extends Foo
//{
//    public function fooStatic(): string
//    {
//        return parent::$my_static;
//    }
//}
//
//
//print Foo::$my_static . "\n";
//
//$foo = new Foo();
//print $foo->staticValue() . "\n";
//print $foo->my_static . "\n";      // Undefined "Property" my_static
////
//print $foo::$my_static . "\n";
////
//print Bar::$my_static . "\n";
//$bar = new Bar();
//print $bar->fooStatic() . "\n";
//



namespace Html;

class Table
{
public string $title = "";
public int $numRows = 0;

public function message()
{
echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
}
}

$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html
