<?php

namespace Html\demo;

class User
{
    protected string $name;
    protected string $email;
    public int $role;

    public function __construct($name = '', $email = '')
    {
        $this->name = $name;
        $this->email = $email;
    }

//    public function __construct()
//    {
//    }

    public function getInfo()
    {
        return $this->name;
    }

    public function isAdmin($role)
    {
        switch ($role) {
            case 1:
                echo "Is Admin <br>";
                break;
            case 2:
                echo "Is normal User <br>";
                break;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

$user = new User('Bill', 'billgates@gmail.com');
echo $user->getInfo()." login - ";
$user->isAdmin(2);

$user->setName('Steve');
$user->setEmail('stevejob@gmail.com');
echo $user->getInfo()." login - ";
$user->isAdmin(1);


