
<?php
require_once __DIR__ . '/products.php';
class Accessories extends Products
{
    public $material;
    public $size;
    public function __construct(string $_img, string $_productName, float  $_price, string $_category, string $_material, int $_size)
    {
        parent::__construct($_img, $_productName, $_price, $_category);
        $this->material = $_material;
        $this->size = $_size;
    }
}
?>