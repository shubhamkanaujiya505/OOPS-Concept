<?php
// create a class
class base{
    public function abc(){
        echo "abc methods form base";
    }
}
// create a trait
trait test{
    public function abc(){
        echo "abc methods from test trait";
    }
}
// create another class 
class xyz extends base{
    use test; // use trait 

    public function abc(){ // 1. priority base on object class if function is found insted of other class then show other wise trati is show the method
        echo "abc methods from test xyz";
    }
}
$obj = new xyz;
$obj->abc(); // output (abc methods from test trait)
// trait is the first preference instead of class
// trait class is override instead of parent class 


?>