<?php
class PetKennel extends Product
{
    public $description;
    public $size;
    public $weight;
    public $material;

    public function __construct($description, $size, $weight, $material, $type, $name, $price, $image, $category)
    {
        parent::__construct($type, $name, $price, $image, $category);
        $this->description = $description;
        $this->size = $size;
        $this->weight = $weight;
        $this->material = $material;
    }
}
