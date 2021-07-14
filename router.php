<?php

include 'vendor/autoload.php';

use App\Controller\ProductController;

$controller = new ProductController();

$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;

switch ($page) {
    case 'product':
        switch ($action) {
            case 'list':
                $controller->show();
                break;
            case 'add':
                $controller->add();
                break;
            case 'update':
                $controller->update();
                break;
            case 'delete':
                $controller->delete();
                break;
            case 'search':
                $controller->search();
                break;
        }
        break;
    default:
        $controller->show();
}