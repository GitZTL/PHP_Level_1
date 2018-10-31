<?php
/*Шаблон "Цифровой товар", наследуемся от штучного*/
namespace twoless\models;
class Product_Digital extends Product_Real
{
    public function getPrice($number) {
        $sum = parent::getPrice($number)/2;
        $this->total -= $sum;
        return $sum;
    }
    public function takeName()
    {
        return "product_digital";
    }
}