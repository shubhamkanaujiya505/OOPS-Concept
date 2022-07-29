<?php

// if this function is static then we not need to make object
// static function are not related to object directly its related to class 
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

// class abc{
//         public  static $value = 3000;
//        public static function  xyz() {  // overright the function
//          return self::$value; // $thid is not working 
//         }
//     }

//     // directly access use class name no need to make a object
//      echo abc::xyz(); // function call

?>


<?php

// class House{
//   public static $size;
//   public static function getsize(){ // get value
//     return self:: $size;
//   }
//   public static function setsize($s){ // set size
//     self::$size = $s;
//   }
// }

// House::setsize(4500);  // calling function use parameter 
// echo House::getsize(); // display the function


?>

<?php

class abc{
  public static $objectcount;
  public static function getcount(){
    return self::$objectcount;
  }
  public function __construct(){
    self::$objectcount++;
  }
}
class xyz extends abc{
  public static function getcount(){
    parent :: getcount();
  }
}

?>