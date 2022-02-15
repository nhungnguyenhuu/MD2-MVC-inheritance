<?php

namespace app\Model;

class ProductsModel extends BaseModel
{
    public $tableName = "products";
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
