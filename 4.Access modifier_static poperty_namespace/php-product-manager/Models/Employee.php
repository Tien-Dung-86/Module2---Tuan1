<?php
namespace Model;
class Employee
{
    private string $lastName;
    private string $name;
    private string $birthDay;
    private string $address;
    private string $position;

    public function __construct($lastName = '', $name = '', $birthDay = '', $address='', $position=''){
         $this->lastName = $lastName;
         $this->name = $name;
         $this->birthDay =$birthDay;
         $this->address = $address;
         $this->position = $position;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getBirthDay(){
        return $this->birthDay;
    }

    public function setBirthDay($birthDay){
        $this->birthDay = $birthDay;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function getPosition(){
        return $this->position;
    }

    public function setPosition($position){
        $this->position= $position;
    }
}