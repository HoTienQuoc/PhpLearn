<?php
$pattern = "/na/i";
$text = "My name is Massimo and I was born in Naples";
echo preg_match_all($pattern, $text);
?>