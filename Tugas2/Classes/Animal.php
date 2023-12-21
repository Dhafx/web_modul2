<?php

namespace Animalia;
abstract class Animal {
    protected $name;
    protected $sound;

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    // Abstract method sebagai contoh
    abstract public function makeSound();
}
