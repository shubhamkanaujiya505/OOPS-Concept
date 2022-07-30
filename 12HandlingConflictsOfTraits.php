<?php

// crate trait
trait a{
    public function aa(){ // create trait function
        echo "aa method of a trait";
    }

}

// create another trait

//1.  both trait method are same so conflict are arise 
trait b{
    public function aa(){ // create another trait function same as trati a 
        echo "aa method of b trait";
    }

}
class c{
    //use a,b; // using both trait together
    // 2. here is the solution
    use a,b{
        a::aa insteadof b;
    // if i want to use both method so 
        b::aa as atrait;
    }
}

// create a object for trait
$object = new c;
$object2 = new c;

$object->aa(); // calling trait function
$object2->atrait(); // calling trait function


?>