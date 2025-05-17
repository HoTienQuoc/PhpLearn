<?php
echo "<h1>"."array_change_key_case"."</h1>";

echo "<h4>"."Returns an array with all keys from the array lowercased or
uppercased. Numbered indices are left as is."."</h4><br/>";

echo "Parameters
array
The array to work on
case
Either CASE_UPPER or CASE_LOWER (default)
Return values
Returns an array with its keys lowercased or uppercased, or null if the
array is not an array
<br/>";

$input = array("FirstName" => "John", "LastName" => "Doe");
$result = array_change_key_case($input, CASE_LOWER);

print_r($result);
echo "<br/>";
/*
Array
(
    [firstname] => John
    [lastname] => Doe
)
*/


$input = array("name" => "Alice", "age" => 30);
$result = array_change_key_case($input, CASE_UPPER);

print_r($result);
/*
Array
(
    [NAME] => Alice
    [AGE] => 30
)
*/
