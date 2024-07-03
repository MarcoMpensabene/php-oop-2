<?php
class Games extends Products
{
    private $feature;

    public function __construct($name, Categories $categories, $price, $productImg,  $feature)
    {
        parent::__construct($name, $categories, $price, $productImg);
        $this->feature = $feature;
    }

    public function getFeature()
    {
        return  $this->feature;
    }
    public function setFeature($feature)
    {
        return  $this->feature = $feature;
    }
}
