<?php
/*Шаблон "Штучный товар", наследуемся от абстрактного товара*/
namespace twoless\models;
class Product_Real extends Product_Abstract
{
    public function getPrice($number) {
        $sum = $this->price * $number;
        $this->total += $sum;
        return $sum;
    }
    public function takeName()
    {
        return "product_real";
    }
}