<?php
class Games extends Product
{
    private $feature;
    private $dimensions;

    public function __construct($name, Category $Category, $price, $productImg,  $feature, $dimensions)
    {
        parent::__construct($name, $Category, $price, $productImg);
        $this->feature = $feature;
        $this->dimensions = $dimensions;
    }

    public function getFeature()
    {
        return  $this->feature;
    }
    public function setFeature($feature)
    {
        return  $this->feature = $feature;
    }

    public function getDimension()
    {
        return  $this->dimensions;
    }
    public function setDimension($dimensions)
    {
        return  $this->dimensions = $dimensions;
    }
}
