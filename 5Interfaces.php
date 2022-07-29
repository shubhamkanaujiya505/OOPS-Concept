<?php

// abstract and interface both are different
// In interface we are implement all declear function in drived class
// in interface we canot make memeber variable and constructor 
// all drived class are implementd to base class not extends 
// extends class only in case when we define class 



//create interface using interface keyword
interface abc{
    public function test();
    public function xyz();
}
class def implements abc{ // implement more than 2 and more class

    public  function test(){
        echo "test function";
    }
    public function xyz(){
        echo "xyz function";
    }
}
    $a =  new def;
    $a->test();
    $a->xyz();


?>
<?php
