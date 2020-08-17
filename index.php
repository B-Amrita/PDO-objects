<?php
include "Dog.php";
include "Cat.php";
include "Goldfish.php";


$doggie = new Dog("Missy", 3, 75);
$doggie->sayHello();
echo "My hight is ". $doggie->getHeight() ."cm" .PHP_EOL;
//special Dog method
$doggie->fetch("stick");

$anotherDoggie = new Dog("Floppy", 4, 80);
$anotherDoggie ->sayHello();
//special Dog method
$anotherDoggie->fetch("old slipper");


$kitty = new Cat("Garfield", 1, 25);
$kitty->sayHello();
//specific Cat method
$kitty->beHappy();

$goldie = new Goldfish("Goldie", 0.02, 2);
//call to the Animal's sayHello method
$goldie->sayHello();
$goldie->setColour('super gold');
$goldie->bePretty();


echo "Total number of animals is " .Animal::$noOfAnimals;

