<?php

// create class
class TV{
    public $modal;
    public $volume;
    // public $timer;
    
    // creating a function 
    function volumeUp(){
        $this->volume++;
    }
    function volumeDown(){
        $this->volume--;
    }

    // creating a constructor
    function __construct($m, $n){ // php magic function starting with __
        $this->modal = $m;  // assigning the value 
        $this->volume = $n;
        
    }
}
// create another class
// extends is a keyword use in class and inhertit all the properties and methods from base class
// 
class timer extends TV{ 
    public $timer = true;
}

// making another class 
class plazma extends timer{

    // create another constructor 
    // first priority always give to drived class in case of overriding but 
    // if this constructor is not define so incase always base constructor call automatically
    function __construct(){
        
    }
    public $plazma = true;
}

// creating object for class
$tv = new timer("nokia",5); // when we pass the parameter to constructor then use ()and pass the value 
// $obj = new TV("samsung",6);
// $obj = new TV("nokia",1332);
// $obj->volumeUp();
// echo $obj->volume;
$plazma1 = new plazma("hello",8);
// echo $plazma1->plazma;

echo $tv->modal;
?>