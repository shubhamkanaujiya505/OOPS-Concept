<?php

// create class
trait abc{
    private function aa(){ // 1. define fuction as private
        echo "aa method of abc class";
    } 
}
class def{
    use abc{
        abc::aa as public abcxyz; // 3. redefine as public then we can use out side of class
    }
   
}
$obj = new def;
// $obj->aa(); // 2. cannot access directly 
$obj->abcxyz(); // 2. cannot access directly 
?>