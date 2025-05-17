<?php
$array = array(
"foo" => "bar",
42 => 24,
"multi" => array(
"dimensional" => array(
"array" => "foobar"
)
)
);
var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
// The output is
// string(3) "bar" int(42) string(6) "foobar"