<?php

//class MyClass
//{
//    function __construct()
//    {
//        echo 'Calling constructor<br/>';
//    }
//
//    function some_method()
//    {
//        echo 'Calling a method<br/>';
//    }
//
//    function __destruct()
//    {
//        echo 'Calling destructor<br/>';
//    }
//}
//
//$myObject = new MyClass();
//
//$myObject->some_method();


//class Person
//{
//    protected string $name;
//
//    protected function set_name(string $newName): void
//    {
//        if ($newName != "Jimmy Two Guns") {
//            $this->name = strtoupper($newName);
//        }
//    }
//}
//
//class Employee extends Person
//{
//    protected function set_name(string $newName): void
//    {
//        if ($newName == "Stefan Sucks") {
//            $this->name = $newName;
//        }
//    }
//    public function displayInfo($newName){
//        $this->set_name($newName);
//    }
//}
//
//$person = new Person();
//$person->$this->name = 'Jimmy';
//
//$employee = new Employee();
//$employee->displayInfo('jimmy');
//echo $employee->$this->name;

//Xây dựng 3 lớp
//Ông
//Cha
//Con
//
//Ông có phương thức run() chạy 5km/h
//Bố có phương thức run() chạy 10km/h
//Con có phương thức run() chạy 20km/h

//Ông có phương thức sing() 1 tham so the loai nha
//Neu truyen tham so la nhacvang thi ong hat bai

class GrandFather
{
    private $speed = 5;

    public function run()
    {
        return $this->speed;
    }

    public function sing($music)
    {
        if ($music == "Yellow music") {
            echo " Grandfather sing a song ('xyz') <br>";
        }
    }
}

?>



