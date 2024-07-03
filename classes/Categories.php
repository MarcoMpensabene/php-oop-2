<?php

class Categories
{
    private  $name;
    private $icon;


    public function __construct($icon, $name)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getIcon()
    {
        return $this->icon;
    }
    public function setIcon($icon)
    {
        return $this->icon = $icon;
    }
}
