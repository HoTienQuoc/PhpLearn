<?php
// Parent class
abstract class Candy {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function slogan() : string;
}
// Child classes
class Skittle extends Candy {
    public function slogan() : string {
        return "$this->name! - Taste the rainbow!";
    }
}
class Twix extends Candy {
    public function slogan() : string {
        return "$this->name - Which side are you?";
    }
}
class KitKat extends Candy {
    public function slogan() : string {
        return "$this->name - Gimmie a break!";
    }
}
// Create objects from the child classes
$skittle = new Skittle('Skittles');
echo $skittle->slogan();
$kitkat = new KitKat('KitKat');
echo $kitkat->slogan();