<?php
class Accessories extends Product
{
    private $dimension;
    private $materials;

    public function __construct($name, Category $Category, $price, $productImg,  $dimension, $materials)
    {
        parent::__construct($name, $Category, $price, $productImg);
        $this->dimension = $dimension;
        $this->materials = $materials;
    }

    public function getDimension()
    {
        return  $this->dimension;
    }
    public function setDimension($dimension)
    {
        return  $this->dimension = $dimension;
    }

    public function getMaterials()
    {
        return  $this->materials;
    }
    public function setMaterials($materials)
    {
        return  $this->materials = $materials;
    }
}
