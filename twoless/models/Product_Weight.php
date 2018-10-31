<?php
/*Шаблон "Весовой товар", наследуемся от штучного*/
namespace twoless\models;
class Product_Weight extends Product_Real
{
    public function takeName()
    {
        return "product_weight";
    }
}