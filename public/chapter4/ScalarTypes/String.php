<?php
$foo = "Hello World!";
$bar = 'Hello World!';
// Single quotes (')
echo 'this is a single quoted string';
echo 'You can also have embedded newlines if This is the best way To get the job done';
// Outputs: that robot once said: "I'll be back"
echo 'that robot once said: "I\'ll be back"';
// Outputs: You formatted C:\*.*?
echo 'You formatted C:\\*.*?';
// Outputs: You formatted C:\*.*?
echo 'You formatted C:\*.*?';
// Outputs: This will not create: \n a newline
echo 'This will not create: \n a newline';
// Outputs: Variables also do not $expand
echo 'Variables also do not $expand';


// Double quotes ('')



// Heredoc syntax (<<<)

echo <<<MYIDENTIFIER
Here is
The text that
I want to display
MYIDENTIFIER;

Echo <<<'FOOBAR'
Text that will not get parsed,
This will just show up
FOOBAR;


// Nowdoc syntax



/////////
$tea = "earl grey";
echo "He drank some $tea tea.".PHP_EOL;
// Invalid. "s" is a valid character for a variable name, but the variable is $tea.
echo "He drank some tea made of $teas.";
// Valid. Explicitly specify the end of the variable name by enclosing it in braces:
echo "He drank some tea made of ${tea}.";


$great = 'fun';
// outputs: This is { fun}
echo "This is { $great}";
// outputs: This is fun
echo "This is {$great}";
// Works
echo "This square is {$square->width}00 centimeters broad.";
// Works, quoted keys only work using the curly brace syntax
echo "This works: {$arr['key']}";
// Works
echo "This works: {$arr[4][3]}";
// This is wrong for the same reason as $foo[bar] is wrong outside a string.
// In other words, it will still work, but only because PHP first looks for a
// constant named foo; an error of level E_NOTICE (undefined constant) will be
// thrown.
echo "This is wrong: {$arr[foo][3]}";
// Works. When using multi-dimensional arrays, always use braces around arrays
// when inside of strings
echo "This works: {$arr['foo'][3]}";
// Works.
echo "This works: " . $arr['foo'][3];
echo "This works too: {$obj->values[3]->name}";
echo "This is the value of the var named $name: {${$name}}";
echo "This is the value of the var named by the return value of
getName(): {${getName()}}";
echo "This is the value of the var named by the return value of\$object->getName(): {${$object->getName()}}";
// Won't work, outputs: This is the return value of getName(): {getName()}
echo "This is the return value of getName(): {getName()}";
// Won't work, outputs: C:\folder\{fun}.txt
echo "C:\folder\{$great}.txt";
// Works, outputs: C:\folder\fun.txt
echo "C:\\folder\\{$great}.txt";

class foo {
    var $bar = 'I am bar.';
}
$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->{$baz[1]}}\n";