<?php

class BabyCar extends Product{
    public $age;
    public $weight;
    private $materials=[];
    private $tax = 14;
    public function setMaterials($material){
        return array_push($this->materials,$material);
    }
    public function displayMaterials(){
        return $this->materials[array_rand($this->materials)];
        
    }
    public function getFinalPrice($price){
        $finalPrice = $price + ($price * $this->tax / 100);
        return $finalPrice;
    }
}
