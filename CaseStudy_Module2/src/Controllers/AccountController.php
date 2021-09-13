<?php

namespace App\Controllers;
session_start();
use App\Models\UserModel;

class UserController extends BaseController
{
    protected $model;


    public function __construct()
    {
        $this->model = new UserModel();
        parent::__construct($this->model);
    }

    public function login($email, $password)
    {

        if ($this->model->checkLogin($email, $password)) {
            $user = $this->model->getByEmail($email);
            $_SESSION['username'] = $user['name'];
            header("Location:index.php?page=book-list");
        } else {
            echo "Wrong account";
        }
    }

    public function showLogin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/Views/Auth/login.php";
        } else {
            $this->login($_REQUEST['email'], $_REQUEST['password']);
        }
    }

    public function logout(){
        session_destroy();
        header("Location:index.php?page=login");
    }

    public function update($id){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/Views/update.php";
        } else {
            $data = [
                "product_code" =>$_POST["product_code"],
                "brand" =>$_POST["brand"],
                "category" =>$_POST["category"],
                "image" =>$_POST["image"],
                "name" =>$_POST["name"],
                "ram" =>$_POST["ram"],
                "cpu" =>$_POST["cpu"],
                "card" =>$_POST["card"],
                "hard_disk" =>$_POST["hard_disk"],
                "screen" =>$_POST["screen"],
                "description" =>$_POST["description"],
                "price" =>$_POST["price"]
            ];
            $this->model->update($id, $data);
            header("Location:index.php?page=product-list");
        }
    }
}
