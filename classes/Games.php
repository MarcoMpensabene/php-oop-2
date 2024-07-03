<?php
class Games extends Products
{
    private $feature;

    public function __construct($name, $category, $price, $feature)
    {
        parent::__construct($name, $category, $price);
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
