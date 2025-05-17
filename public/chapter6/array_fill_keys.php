<?php
$keys = ["a", "b", "c"];
$value = "PHP";

$result = array_fill_keys($keys, $value);

print_r($result);
// Array
// (
//     [a] => PHP
//     [b] => PHP
//     [c] => PHP
// )
