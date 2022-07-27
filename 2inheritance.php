<?php

class TV{
    public $modal;
    public $volume;
    function volumeUp(){
        $this->volume++;
    }
    function volumeDown(){
        $this->volume--;
    }
    function __construct($m, $n){
        $this->modal = $m;
        $this->volume = $n;
        
    }
}
class timer extends TV{
    public $timer = true;
}
class plazma extends timer{
    public $plazma = true;
}

$tv = new timer("nokia",5);
// $obj = new TV("samsung",6);
// $obj = new TV("nokia",1332);
// $obj->volumeUp();
// echo $obj->volume;
$plazma1 = new plazma("hello",8);
// echo $plazma1->plazma;

echo $tv->modal;
?>