<?php
require_once __DIR__ . "/Foods.php";
require_once __DIR__ . "/Games.php";
require_once __DIR__ . "/Accessories.php";

class Products
{
    private $name;
    private $categories;
    private $price;

    public function __construct(string $name, $categories,  string $price)
    {
        $this->name = $name;
        $this->categories = $categories;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name = $name;
    }


    public function getCategories()
    {
        return $this->categories;
    }
    public function setCategories($categories)
    {
        return $this->categories = $categories;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        return $this->price = $price;
    }
}
