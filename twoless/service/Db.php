<?php
namespace twoless\service;
class Db
{
    public function exec($sql, $params = [])
    {
        return true;
    }
    public function queOne($sql, $params = [])
    {
        return [];
    }
    public function queAll($sql, $params = []){
        return [];
    }
}