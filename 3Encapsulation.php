<?php
// we have done class, object, inheritance, constructor, function, variable and function overriding
// when we make more than one class so our code are vary large and run time also increase so we need inheritance 
// in inheritance when we make a class and object than we change the classs property form out side the class this happen is not again so we need to encapsulation access modifier 
// how Encapsulation concept come

// create class
class abc{

    // declear class memeber variable 
    public $model;
    public $volume;
    
    // declear class memeber function 
    function volumeUp(){
        $this->volumeUp;
    } 

    function volumeDown(){
        $this->volumeDown;
    }
    
    // declear construtor
    function __construct($m, $n) // pass parameter 
    {
       echo $this->model = $m;  // assigning the value of parameter in constructor
       echo $this->volume = $n;
    }
}
// creating object 
$obj = new abc("hello","world");

// we can also change the value of model
// if we dont want to change the value of parent class properties value, then we have concept of Encapsulation
$obj->model = ' Shubham';
echo $obj->model; 

// echo $obj->volume;
// echo $obj->volumeUp();


?>