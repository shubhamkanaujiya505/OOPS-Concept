<?php

// create classs
class TV{
    public $modal = "xyz"; // "xyz" assigning the default value of $modal variable 
    public $volume = 1;

    public function __construct() {  // declear constructor

    }

    function volumeUp(){ // defining function 
        $this->volume++;
    }
    function volumeDown(){
        $this->volume--;
    }
}

// create object for class TV
$TV_one = new TV;
$TV_two = new TV;

echo $TV_one->volumeUp(); // calling the funtion using class onject

echo $TV_one->volume; 
?>