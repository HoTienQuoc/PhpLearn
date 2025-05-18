<?php
$pattern = "/red/i";
$text = "My favorite color is red!";
echo preg_replace($pattern, "blue", $text);
?>