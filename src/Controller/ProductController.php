<?php


namespace App\Controller;

use App\Model\ProductModel;

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function show()
    {
        $products = $this->productModel->getAll();
        include 'View/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'View/add.php';
        } else {
            $this->productModel->add($_REQUEST);
            header('Location: index.php?page=product&action=list');
        }
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $product = $this->productModel->get($id);
            include 'View/update.php';
        } else {
            $this->productModel->update($_REQUEST);
            header('Location: index.php?page=product&action=list');
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->productModel->delete($id);
        header('Location: index.php?page=product&action=list');
    }

    public function search()
    {
        $search = $_POST['search'];
        $products = $this->productModel->search($search);
        include 'View/list.php';
    }
}