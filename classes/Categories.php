<?php

class Categories
{
    private $dog = "Dog";
    private $cat = "Cat";
    private $bird = "Bird";
    private $fish = "Fish";

    public function __construct($dog, $cat, $bird, $fish)
    {
        $this->dog = $dog;
        $this->cat = $cat;
        $this->bird = $bird;
        $this->fish = $fish;
    }
}
