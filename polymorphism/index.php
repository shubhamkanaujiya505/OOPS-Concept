<?php

function __autoload($class){
    include_once "polymorphism/class.php";
}

// $logger = new DBlogger();
// $logger = new filelogger(); // when file logger class call
$logger = new emaillogger(); // when file logger class call

$profile = new UserProfile($logger);// when file logger class call

$profile->CreateUser();



?>