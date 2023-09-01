<?php 
class Sofa extends Furniture {

    public $seats;
    public $armrest;
    public $length_opened;

    
    public function getSeats()
    {
       return  $this->seats; 
    }
    public function setSeats($seats)
       { $this->seats = $seats;
       }

    public function getArmrest(){
        return $this->armrest;
    }
    public function setArmrest($armrest)
    {
        $this->armrest = $armrest;
    }   
    public function getLength()
    {
        return $this->length_opened;
    }
    public function setLength($length)
    {
        $this->length_opened = $length;
    }
    

    public function area_opened() {
        if ($this->getIsForSleep()) {
            return $this->getWidth() * $this->length_opened;
        } else {
            return "This sofa is for sitting only, it has {$this->armrest} armrests and {$this->seats} seats.";
        }
    }
    
}