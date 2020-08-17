<?php

class Goldfish extends Animal{
    
    private $colour;
    
    //generated setter
    function setColour($colour): void {
        $this->colour = $colour;
    }
    
    public function bePretty(){
        echo "I'm so pretty, I'm ". $this->colour .PHP_EOL;
    }
}
