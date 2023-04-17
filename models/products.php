<?php
require_once __DIR__ . '/categories.php';
class Products
{
    public $img;
    public $productName;
    public $price;
    public $category;
    public function  __construct(string $_img, string $_productName, float  $_price, string $_category)

    {
        $this->img = $_img;
        $this->productName = $_productName;
        $this->price = $_price;
        $this->category = $_category;
    }
}
?>