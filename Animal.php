<?php

class Animal {
   protected $name;
   private $weight;
   private $height;
   
   public static $noOfAnimals = 0;
    
    public function __construct($name, $weight, $hight){
        $this->name = $name;
        $this->height = $hight;
        $this->weight = $weight;
        self::$noOfAnimals ++;
    }
    
    function getWeight() {
        return $this->weight;
    }

    function getHeight() {
        return $this->height;
    }
    
    public function sayHello(){
        echo ". . . " . $this->name . PHP_EOL;
    }

}
