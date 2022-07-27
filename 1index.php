<?php

class TV{
    public $modal = "xyz";
    public $volume = 1;


    function volumeUp(){
        $this->volume++;
    }
    function volumeDown(){
        $this->volume--;
    }
}

$TV_one = new TV();
$TV_two = new TV();

$TV_one->volumeDown();

echo $TV_one->volume;
?>