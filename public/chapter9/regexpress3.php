<?php
$pattern = "/imo$/";
$text = "Massimo";
if(preg_match($pattern, $text)){
echo "Match was found!"; }
else{
echo "Match was not found."; }
?>