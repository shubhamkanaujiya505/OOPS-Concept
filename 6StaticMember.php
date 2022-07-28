<?php

// if this function is static then we not need to make object
// static function are not related to object directly its related to class directly
// $this-> is a object so they not work properly
// class abc{
//     public $value;
//    public static function  xyz() {
//         echo "helo how are you";
//     }
// }
// abc::xyz(); // function call
?>


<?php

class abc{
        public  static $value = 3000;
       public static function  xyz() {
         return self::$value;
        }
    }
     echo abc::xyz(); // function call

?>