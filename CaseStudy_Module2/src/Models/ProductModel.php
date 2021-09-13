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
        $sql = "INSERT INTO $this->table(product_code, brand, category, image, name, ram, cpu, card, hard_disk, screen, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['product_code']);
        $stmt->bindParam(2, $data['brand']);
        $stmt->bindParam(3, $data['category']);
        $stmt->bindParam(4, $data['image']);
        $stmt->bindParam(5, $data['name']);
        $stmt->bindParam(6, $data['ram']);
        $stmt->bindParam(7, $data['cpu']);
        $stmt->bindParam(8, $data['card']);
        $stmt->bindParam(9, $data['hard_disk']);
        $stmt->bindParam(10, $data['screen']);
        $stmt->bindParam(11, $data['description']);
        $stmt->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = $id";
        $stmt = $this->connect->query($sql);
    }

    public function update($id, $data){
        $sql = "UPDATE $this->table SET product_code=?, brand=?, category=?, image=? , name=?, ram=?, cpu=?, card=?, hard_disk=?, screen=?, description=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['product_code']);
        $stmt->bindParam(2, $data['brand']);
        $stmt->bindParam(3, $data['category']);
        $stmt->bindParam(4, $data['image']);
        $stmt->bindParam(5, $data['name']);
        $stmt->bindParam(6, $data['ram']);
        $stmt->bindParam(7, $data['cpu']);
        $stmt->bindParam(8, $data['card']);
        $stmt->bindParam(9, $data['hard_disk']);
        $stmt->bindParam(10, $data['screen']);
        $stmt->bindParam(11, $data['description']);
        $stmt->execute();
    }

    public function search($keyword){
        $sql = "SELECT * FROM $this->table WHERE `name` LIKE '%".$keyword."%'";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll();
    }
}
