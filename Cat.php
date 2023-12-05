<?php
class Cat extends Animal {
    private $age;

    public function __construct($name, $age) {
        parent::__construct($name);
        $this->age = $age;
    }

    public function birthday() {
        parent::birthday();
        $this->age++;
    }

    public static function payAttention() {
        echo "meow!";
    }
}
