<?php

// In inheritance we cannot extends nore than one class this is the limitation of inheritance
// so thats why traits is introduce
// when we create a function common for all class then if we inherit this method to some class then do this 
// but this proprty inherit all class automatically
// if we use trait then write a trait class and define method sepratlly and use individually class so these 

// traits are horizontallly create a traits and use

class abc{
    public function test(){
        echo "Test from class abc";
    }
}

// create trait
// trait 

// trait is define horizontally
trait test{
    public function ABC(){
        echo "ABC from test trait ";
    }
}

// we can use multiple traits
trait test2{
    public function qwe(){
        echo "qwe method from test2";
    }
}

class one extends abc{
    use test, test2; // use trait method like this 
    // multiple trait use like this
    
}
class two extends abc{
    use test; // use trait method like this 
    
}
class three extends abc{

}
class four extends abc{

}
class five extends abc{

}
$obj = new one;
$obj->ABC();
$obj->qwe(); // callig the class method
?>