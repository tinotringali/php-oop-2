<?php
require_once __DIR__ . '/products.php';
class Food extends Products
{
    public $netWeight;
    public $ingredients;
    public function __construct(string $_img, string $_productName, float  $_price, string $_category, int $_netWeight, string $_ingredients)
    {
        parent::__construct($_img, $_productName, $_price, $_category);
        $this->netWeight = $_netWeight;
        $this->ingredients = $_ingredients;
    }

}
?>
