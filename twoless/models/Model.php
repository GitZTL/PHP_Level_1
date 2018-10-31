<?php
namespace twoless\models;
use twoless\interfaces\IModel;
use twoless\service\Db;
abstract class Model implements IModel{

    public $id;
    private $db;

    public function __construct(){
        $this->db = $this->getDb();
    }

    public function itemOne($id){
        $tableName = $this->getTableName();
        return $this->db->queOne("SELECT * FROM {$tableName} WHERE id = {$id}");
    }

    public function takeAll(){
        $tableName = $this->getTableName();
        return $this->db->queAll("SELECT * FROM {$tableName}");
    }

    private function getDb(){
        return new Db();
    }
}