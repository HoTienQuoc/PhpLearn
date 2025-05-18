<?php
//here we create a function with an exception
function checkMyNum($mynumber) {
if($mynumber>1) {
throw new Exception("The entered number must be 1 or
below!!");
}
return true;
}
checkMyNum(3);