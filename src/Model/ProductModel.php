<?php


namespace App\Model;


class ProductModel
{
    public $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function add($request)
    {
        $sql = "insert into products (name,type,price,amount,description) value (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $request['name']);
        $stmt->bindParam(2, $request['type']);
        $stmt->bindParam(3, $request['price']);
        $stmt->bindParam(4, $request['amount']);
        $stmt->bindParam(5, $request['description']);
        return $stmt->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($request)
    {
        $sql = "UPDATE products SET name=?,type=?,price=?,amount=?,description=? where id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $request['name']);
        $stmt->bindParam(2, $request['type']);
        $stmt->bindParam(3, $request['price']);
        $stmt->bindParam(4, $request['amount']);
        $stmt->bindParam(5, $request['description']);
        $stmt->bindParam(6, $request['id']);
        return $stmt->execute();
    }

    public function delete($request)
    {
        $sql = "DELETE FROM products WHERE id= $request";
        $stmt = $this->conn->query($sql);
        return $stmt->execute();
    }

    public function search($request)
    {
        $sql = "select * from products where name like '$request%'";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}