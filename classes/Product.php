<?php

/**
 * Class that instance a Product 
 * 
 */
class Product
{
    private $name;
    private $Category;
    private $price;
    private $productImg;


    /**
     * Undocumented function
     *
     * @param string $name Name of the product 
     * @param object $Category Instance of the class Category 
     * @param string $price Price of the product 
     * @param string $productImg Image of the product
     */
    public function __construct(string $name, Category $Category,  string $price, $productImg)
    {
        $this->name = $name;
        $this->Category = $Category;
        $this->price = $price;
        $this->productImg = $productImg;
    }


    /**
     * Get the product name
     *
     * @return void
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set/change the product name
     *
     * @param string $name 
     * @return void
     */
    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getCategory()
    {
        return $this->Category;
    }

    public function setCategory($Category)
    {
        return $this->Category = $Category;
    }
    /**
     * Get the product Price
     *
     * @return void
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set the prodict price
     *
     * @param string $price
     * @return string the setted argument
     */
    public function setPrice($price)
    {
        return $this->price = $price;
    }
    /**
     * Get the product img url
     *
     * @return void
     */
    public function getImg()
    {
        return $this->productImg;
    }
    /**
     * Set/change the porduct img url
     *
     * @param string $productImg
     * @return string the changed img url
     */
    public function setImg($productImg)
    {
        return $this->productImg = $productImg;
    }
}
