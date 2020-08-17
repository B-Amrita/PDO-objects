<?php
include 'Animal.php';

class Dog extends Animal{  
    
    //overriding the Animal's sayHello method
    public function sayHello(){
        echo "Woof woof, my name is $this->name.".PHP_EOL;
    }
    
    public function fetch($thing){
        echo "Here is your ".$thing .PHP_EOL;
    }
}