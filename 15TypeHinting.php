<?php

// where we recive a variable so which type of variable recive that point we use type hinting

// function test(array $arr){ // array is a type hinting because they verify the data type which datatype they recive

//     echo "<table>";
//     foreach($arr as $key => $v){
//     echo "<tr><td>$k</td><td>$v</td><tdtr>";
// }
//     echo "</table>";
// }
// // $array = ['you'=>'are', 'me'=>'you']; // work perfectly
// $array = "alsdkfjdf";
// test($array);


// // type hinting is use on object or class in php 

class abc {
    public function doingsomething(){
        echo "doing somthing";
    }
}
class xyz{
    public function doingsomethingelse(){
        echo "doing somthing else";
    }
}
function test(abc $Abc){ // 1. program halt at this place 
                        // 2. more security
    $Abc->doingsomething();
}
$g = new xyz();
test($abc);
//also use with interface
?>