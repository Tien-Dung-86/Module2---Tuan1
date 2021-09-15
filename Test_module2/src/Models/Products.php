<?php
namespace App\Models;


class Products{
    protected $table = "products";
    protected $connect;

    public function __construct(){
        $this->dbConnect = new DBConnect();
        $this->connect = $this->dbConnect->connect();
    }

    public function getAll(){
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll();
    }

    public function add($data){
        $sql = "INSERT INTO `$this->table`(`productName`, `category`, `price`, `quantity`, `description`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['productName']);
        $stmt->bindParam(2, $data['category']);
        $stmt->bindParam(3, $data['price']);
        $stmt->bindParam(4, $data['quantity']);
        $stmt->bindParam(5, $data['description']);
        $stmt->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $stmt = $this->connect->query($sql);
    }

    public function update($id, $data){
        $sql = "UPDATE $this->table SET productName=?, category=?, price=?, quantity=?, description=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['productName']);
        $stmt->bindParam(2, $data['category']);
        $stmt->bindParam(3, $data['price']);
        $stmt->bindParam(4, $data['quantity']);
        $stmt->bindParam(5, $data['description']);
        $stmt->execute();
    }

    public function search($keyword){
        $sql = "SELECT * FROM $this->table WHERE `productName` LIKE '%".$keyword."%'";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll();
    }
}
