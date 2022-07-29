<?php

class UserProfile{ 

    private $logger;

    public function CreateUser(){
        echo "creating user.";
        $this->logger->log("User Created"); 
    }
    public function InsertUser(){
        echo "update user.";
        $this->logger->log("User updated");
        
    }
    public function DeleteUser(){
        echo "Delete user.";
        $this->logger->log("deleting user.");

    }
    // public function __construct(logger $logger) //logger is a type hinting
    // public function __construct(filelogger $logger) //filelogger use when use file logger class
    public function __construct(emaillogger $logger) //filelogger use when use file emaillogger class
    {
        $this->logger = $logger;
    }
}
?>