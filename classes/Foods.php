<?php

class Foods extends Products
{
    private $ingridients;
    private $weight;

    public function __construct($name, $categories, $price, $ingridients, $weight)
    {
        parent::__construct($name, $categories, $price);
        $this->ingridients = $ingridients;
        $this->weight = $weight;
    }

    public function getIngridients()
    {
        return  $this->ingridients;
    }
    public function setIngridients($ingridients)
    {
        return  $this->ingridients = $ingridients;
    }
    public function getWeight()
    {
        return  $this->weight;
    }
    public function setWeight($weight)
    {
        return  $this->weight = $weight;
    }
}
