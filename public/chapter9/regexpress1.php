<?php
$pattern = "/massimo/i";
$text = "My name is Massimo.";
if(preg_match($pattern, $text)){
echo "Match was found!"; }
else{
echo "Match was not found."; }
?>