<?php

class Product
{
    private $name;
    private $price;
    
    public function __construct($name = "", $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function __toString()
    {
        return $this->name." ".$this->price."€";
    }
}

$headphones = new Product("JBL Tune 650NC", 80);
echo $headphones;

