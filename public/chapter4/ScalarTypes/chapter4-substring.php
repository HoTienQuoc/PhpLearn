<?php
$comment = 'Your product is great!';
echo substr($comment, 1) . "\n";
// returns 'our product is great!'.
$comment = 'Your product is great!';
echo substr($comment, -9) . "\n";
// returns 'is great!'.

$comment = 'Your product is great!';
echo substr($comment, 0, 4);
// returns 'Your'
echo substr($comment, 5, -10);
//returns 'product'