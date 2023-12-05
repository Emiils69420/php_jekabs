<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function birthday() {
        // Šī metode palielina vecumu par 1
        // (Vecumu glabājām klasē Dog un Cat, bet šeit definējām kopējo funkcionalitāti)
    }

    public static function payAttention() {
        // Statiska metode, kas izvada uzmanības piesaukumu
    }
}