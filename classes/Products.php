<?php


class Products
{
    private $name;
    private $categories;
    private $price;
    private $productImg;

    public function __construct(string $name, Categories $categories,  string $price, $productImg)
    {
        $this->name = $name;
        $this->categories = $categories;
        $this->price = $price;
        $this->productImg = $productImg;
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

    public function getImg()
    {
        return $this->productImg;
    }
    public function setImg($productImg)
    {
        return $this->productImg = $productImg;
    }
}
