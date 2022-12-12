<?php
class Product
{
    public $type;
    public $name;
    public $price;
    public $image;
    public $category;

    public function __construct(string $type, string $name, int $price, string $image, Category $category)
    {
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}
