<?php
$myArray[0] = "first";
$myArray[1] = "Second";
$myArray[2] = "3rd";
var_dump($myArray);

// array(3) {
// [0]=>
// string(5) "first"
// [1]=>
// string(6) "second"
// [2]=>
// string(3) "3rd"
// }

$myArray1['fruit'] = "apple";
$myArray1['vegetable'] = "carrot";
$myArray1['color'] = "blue";
var_dump($myArray1);

// array(3) {
// ["fruit"]=>
// string(5) "apple"
// ["vegetable"]=>
// string(6) "carrot"
// ["color"]=>
// string(4) "blue"
// }

$strangestThings['season1']['episode1'] = "The Beginning";
$strangestThings[0][0] = "The Beginning";
$strangestThings['season1']['episode3'] = "The Third Episode";
var_dump($strangestThings);