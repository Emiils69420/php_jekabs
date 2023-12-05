<?php
class Dog extends Animal {
    private $age;

    public function __construct($name, $age) {
        parent::__construct($name);
        $this->age = $age;
    }

    public function birthday() {
        parent::birthday(); // Izsaucam vecāko klases metodi, lai palielinātu vecumu
        $this->age++;
    }

    public static function payAttention() {
        echo "woof!";
    }
}