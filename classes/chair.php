<?php 
class Chair extends Furniture implements Printable{
    
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
    public function area(){
        return $this->width * $this->length;
    }

    public function volume(){
        return $this->area() * $this->height;
    }
    
    public function print(){
    
        echo  get_class() . ', ' . ($this->getIsForSleep() ? 'sleeping' : 'sitting only') . ', ' . $this->area() . 'cm2';
        }
    
    public function sneakpeek(){
        echo "It is " . get_class();
    }
    public function fullInfo(){
        echo get_class() . ', ' . ($this->getIsForSleep() ? 'sleeping' : 'sitting only') . ', ' . $this->area() . 'cm2, width: ' . $this->width . 'cm, length: ' . $this->length . 'cm, height: ' . $this->height . 'cm';
    }

    
}