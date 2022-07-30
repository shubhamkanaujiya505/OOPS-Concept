<?php
// namesspace like a folder 
// we make folder because our file are well organized and resolve the naming conflict
// IN namespace we cannot make more than one function as a same name
// namespace declear two type 
// 1. bracketed
// 2. non-bracked

// 2. namespace def;//without bracketd
namespace abc\gfd\fdf{ // namespace declear on top like globaly
    class def{
        public function __construct(){
            echo "def method in abc";
        }

    }
}
namespace {
    class jkl{
        public function __construct(){
            echo "jkl method in ghi";
        }
    }
    // use abc\jkl as ooo; // use when namesspace name is too long so create alias 
    $obj = new jkl();
    // if we want to make a object another namespace is doing like 2 ways
    // $obj = new abc\jkl(); //1. like this 
    


}

// 5. class test{ // we can not declear a class without namespace in a same file 

// }
?>