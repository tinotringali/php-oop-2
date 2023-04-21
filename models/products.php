<?php
require_once __DIR__ . '/categories.php';
require_once __DIR__. '/../traits/productName.php';
class Products
{

    use Name;

    public $img;
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