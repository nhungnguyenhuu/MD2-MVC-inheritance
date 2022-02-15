<?php
namespace app\Controller;
use app\Model\ProductsModel;
use app\model\ProductTypeModel;

class ProductsController
{
    public $productsController;
    public function __construct()
    {
        $this->productsController = new ProductsModel();
    }

    public function getAll()
    {
        $products = $this->productsController->getAll();
        include "app/View/Product/read.php";
    }
    public function create()
    {
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $productTypeController = new ProductTypeModel();
            $productTypes = $productTypeController->getAll();
            include "app/view/product/create.php";

        }else{

            $data = [
                "name"=>$_REQUEST["name"],
                "quantity"=>$_REQUEST["quantity"],
                "price"=>$_REQUEST["price"],
                "producttype_id"=>$_REQUEST["producttype_id"]
            ];

            $this->productsController->create($data);
        }

    }

}