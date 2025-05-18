<?php
class Beverage {
public $name;
public $type;
public $temperature;
public $price;
public $sale;
}

$cola = new Beverage();

$cola->name = "Rocky Cola";
$cola->type = "Soda";
$cola->teperature = "45 f";
$cola->price = "0.50";
$cola->sale = null;

function getMenuName() {
    return $this->type.' '.$this->name.' '.$this->price;
}
    