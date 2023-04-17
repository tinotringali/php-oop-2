<?php
require_once __DIR__ . '/products.php';
class Toys extends Products
{
    public $features;
    public $size;
    public function __construct(string $_img, string $_productName, float $_price, string $_category, string $_features, int $_size)
    {
        parent::__construct($_img, $_productName, $_price, $_category);
        $this->features = $_features;
        $this->size = $_size;
    }

}

?>