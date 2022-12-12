<?php
class Toy extends Product
{
    public $description;
    public $size;
    public $weight;

    public function __construct($description, $size, $weight, $type, $name, $price, $image, $category)
    {
        parent::__construct($type, $name, $price, $image, $category);
        $this->description = $description;
        $this->size = $size;
        $this->weight = $weight;
    }
}
