<?php
// we have done class, object, inheritance, constructor, function, variable and function overriding

// how Encapsulation concept come

// create class

use plazma as GlobalPlazma;

class abc{

    // declear class memeber variable 

    private $model = 'hello'; 
    private $volume;
    
    // declear class memeber function 
    public function volumeUp(){
        $this->volumeUp;
    } 

    public function volumeDown(){
        $this->volumeDown;
    }
    // use getmodel function to echo that properties whose define private
    // but we cant change the value 
    public function getmodel(){ // this method only return value
        return $this->model;
    }
    
    // declear construtor
    // function __construct($m, $n) // pass parameter 
    // {
    //    echo $this->model = $m;  // assigning the value of parameter in constructor
    //    echo $this->volume = $n;
    // }
}

class plazma extends abc{
    public function getmodel()
    {
        return $this->model = "hoooooo";
    }
}

// creating object 
$obj = new abc("hello","world");
$p = new Plazma("hai","man");

echo $p->getmodel();


// we can also change the value of model
// if we dont want to change the value of parent class properties value, then we have concept of Encapsulation
// $obj->model;

// change the parent class variable directly but we dont do this 
// so we use access specifier 
//public,
//protcted,
//private,
// echo $obj->model = 'shubham';  
// but 1 problem arise
//we dont echo also that properties
echo $obj->getmodel();  

// echo $obj->volume;
// echo $obj->volumeUp();
?>