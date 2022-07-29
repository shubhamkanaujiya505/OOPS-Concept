<?php

// dependency injection is a design pattern
// when a liberary use in another liberary this is the reusability
// when a libery make every time in another liberary this is not valid so that time we use dependency injection


class logger{
    public function log($message){
        echo "logging message: $message";
    }
}
$logger = new logger();
$logger->log("this is a logger class");


class UserProfile{ // 1. this class is dependent on logger

    private $logger;
    public function CreateUser(){
        //$C = new logger;  // not follow DRY property
        $this->C->log("User Created"); 
    }
    public function InsertUser(){
        //$I = new logger;
        $this->I->log("User inserted");

    }
    public function DeleteUser(){
        //$D = new logger;
        $this->D->log("User deleted");

    }
    public function __construct($logger)
    {
        $this-> logger = $logger;
    }
}
$logger = new logger();
$profile = new UserProfile($logger);
$profile->CreateUser();
?>