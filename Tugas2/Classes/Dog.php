<?php

namespace Animalia;

include_once "Classes/Animal.php";
include_once "Traits/GreetTrait.php";

class Dog extends Animal {
    use GreetTrait;

    public function makeSound() {
        echo $this->sound . "\n";
    }
}
