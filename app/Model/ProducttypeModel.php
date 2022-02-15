<?php

namespace app\Model;
use PDO;
class ProducttypeModel extends BaseModel
{
    public $tableName = "producttype";
    public function update($data, $id)
    {
        $sql = "update producttype set name =?, description = ? where id =?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["description"]);
        $stmt->bindParam(3, $id);
        $stmt->execute();
    }

    public function create($data)
    {
        $sql = "insert into producttype(name, description) values (?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data["name"]);
        $stmt->bindParam(2, $data["description"]);
        $stmt->execute();

    }
}

