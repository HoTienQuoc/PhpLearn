<?php
class Vegetable {
// Properties
public $name;
public $color;
// Methods
function set_name($name) {
$this->name = $name;
}
function get_name() {
return $this->name;
}
}