<?php
namespace App\Controllers;
use App\Models\Products;

class ProductController{
    protected $model;

    public function __construct(){
        $this->model = new Products();
    }

    public function index(){
        $products =  $this->model->getAll();
        include "src/Views/list.php";
    }

    public function add(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include_once "src/Views/add.php";
        } else {
            $data = [
                "productName" =>$_POST["productName"],
                "category" =>$_POST["category"],
                "price" =>$_POST["price"],
                "quantity" =>$_POST["quantity"],
                "description" =>$_POST["description"]
            ];
            $this->model->add($data);
            header("Location:index.php?page=product-list");
        }
    }
    public function delete($id){
        $this->model->delete($id);
        header("Location:index.php?page=product-list");
    }

    public function update($id){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            include "src/Views/update.php";
        } else {
            $data = [
                "productName" =>$_POST["productName"],
                "category" =>$_POST["category"],
                "price" =>$_POST["price"],
                "quantity" =>$_POST["quantity"],
                "description" =>$_POST["description"]
            ];
            $this->model->update($id, $data);
            echo '<script type="text/javascript"> alert("Xóa thành công"); window.location.href = "index.php"  </script>';
        }
    }

    public function search($keyword){
        $products = $this->model->search($keyword);
        include "src/Views/list.php";
    }
}