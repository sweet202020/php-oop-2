<?php
class Food extends Product
{
    public $description;
    public $size;
    public $calories;
    public $expiration_date;

    public function __construct($description, $size, $calories, $expiration_date, $type, $name, $price, $image, $category)
    {
        parent::__construct($type, $name, $price, $image, $category);
        $this->description = $description;
        $this->size = $size;
        $this->calories = $calories;
        $this->expiration_date = $expiration_date;
    }
}
