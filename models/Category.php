<?php 
class Category
{
    public $animal;
    public $icon;
    public function __construct(string $animal, string $icon)
    {
        $this->animal = $animal;
        $this->icon = $icon;
    }
}
