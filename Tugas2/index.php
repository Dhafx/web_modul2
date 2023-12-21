<?php

include_once "Classes/Cat.php";
include_once "Classes/Dog.php";

use Animalia\Cat;
use Animalia\Dog;

$dog = new Dog("Buddy", "Woof");
$cat = new Cat("Whiskers", "Meow");

$dog->greet();
$dog->makeSound();

$cat->greet();
$cat->makeSound();
