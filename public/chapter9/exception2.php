<?php
//here we create a function with an exception
function checkMyNum($mynumber) {
    if($mynumber>1) {
        throw new Exception("The entered number must be 1 or below!!");
    }
    return true;
}
//let's trigger the exception in a "try" block sending the number 3
try {
    checkMyNum(3);
    //In the case of the exception thrown, this text will not be shown to the user
    echo 'The number you entered is 1 or below!!';
}
//our code will catch exception and generate a message
catch(Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
// finally block to complete our code execution process
finally {
    echo "Code execution completed.";
}