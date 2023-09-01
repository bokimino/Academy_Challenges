<?php
class Furniture {
    private $width;
    private $length;
    private $height;
    private $is_for_seating;
    private $is_for_sleeping;

    public function __construct($width, $length, $height){
            $this->width = $width;
            $this->length = $length;
            $this->height = $height;

    }
    

    public function getIsForSeat(){

        echo $this->is_for_seating;
    }
    public function getIsForSleep(){

        echo $this->is_for_sleeping;
    }
    public function setIsForSeat( $seating = true){
        $this->is_for_seating = $seating;
    }
    public function setIsForSleep( $sleep = true){
        $this->is_for_sleeping = $sleep;
    }

    public function area(){
        return $this->width * $this->length;
    }

    public function volume(){
        return $this->area() * $this->height;
    }
    
}