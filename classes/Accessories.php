<?php
class Accessories extends Products
{
    private $type;
    private $materials;

    public function __construct($name, Categories $categories, $price, $productImg,  $type, $materials)
    {
        parent::__construct($name, $categories, $price, $productImg);
        $this->type = $type;
        $this->materials = $materials;
    }

    public function getType()
    {
        return  $this->type;
    }
    public function setType($type)
    {
        return  $this->type = $type;
    }

    public function getMaterials()
    {
        return  $this->type;
    }
    public function setMaterials($materials)
    {
        return  $this->materials = $materials;
    }
}
