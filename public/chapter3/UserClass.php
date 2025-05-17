<?php
class UserClass{
    function __construct() {
        print "In UserClass constructor\n";
    }
    /* User variables */
    var $firstName;
    var $LastName;
    /* Member functions */
    function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    function getFirstName(){
        echo $this->firstName;
    }
    function setLastName($LastName){
        $this->LastName = $LastName;
    }
    function getLastName(){
        echo $this->LastName;
    }
    function __destruct() {
        print "Destroying " . __CLASS__ ."\n";
    }
}
$user = new UserClass();
$user->setFirstName('gunnard');
$user->setLastName('engebreth');
var_dump($user);