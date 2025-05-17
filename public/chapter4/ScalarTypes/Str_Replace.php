<?php
$strings = array (
    'You like to have a snazzy time',
    'You are a really snazzy person',
    'Would you like to drink a cup of coffee?'
);
$search = array (
    'snazzy',
    'cup',
    'person',
    'coffee'
);
$replace = array (
    'great',
    'bottle',
    'dude',
    'Dark brown stuff'
);
$replaced = str_replace ( $search, $replace, $strings, $count);
foreach ($replaced as $line) {
    echo $line . "<br>";
}
echo $count;
