<?php
$pattern = "/(co){2}/i";
$text = "I like coconut.";
if(preg_match($pattern, $text)){
echo "Match was found!"; }
else{
echo "Match was not found."; }
?>