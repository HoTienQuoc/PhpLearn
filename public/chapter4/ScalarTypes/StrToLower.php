<?php
function calm_down($string) {
return strtolower ( $string );
}
$person = 'Angry people SHOUT!';
echo calm_down ( $person );
// angry people shout!
?>