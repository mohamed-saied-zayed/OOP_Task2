<?php

class Book extends Product{
    private $publishers = [];
    public $writer;
    public $color;
    public $supplier;

    public function setPublisher($publisher){
        return array_push( $this->publishers, $publisher );
    }

    public function choosePublisher(){
        return $this->publishers[array_rand($this->publishers)];
    }

    public function showAllPublishers(){
        return $this->publishers;
    }   
}
