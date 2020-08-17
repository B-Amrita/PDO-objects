<?php

class Cat extends Animal{
    
    //overriding the Animal's sayHello method
    public function sayHello(){
        echo "Meow meow my name is " . $this->name . PHP_EOL;
    }
    
    public function beHappy(){
        echo "I'm so happy, purr purr".PHP_EOL;
    }
}
