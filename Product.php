<?php

class Product{
    public $name;
    private $price;
    public $description;
    public $image;
    public function uploadImage($image){
       return $this->image = $image;
    }
    public function setPrice($price){
        return $this->price = $price;
    }
    public function calcPrice($discount){
        $this->price = $this->price - $discount;
        return $this->price;
    }
}



