<?php
	// This is the file for the parent class

class Card{
  protected $length = 0;
  protected $width = 0;
  protected $color = "";
  protected $moneyGift = 0;
  protected $message = "";

  public function __construct($l,$w,$c,$money,$message){
    $this->length=$l;
    $this->width=$w;
    $this->color=$c;
    $this->moneyGift=$money;
    $this->message=$message;
  }

  public function __destruct()
  {

  }

  public function __toString(){
    return "Color: " . $this->color . "<br>Length: " . $this->length . " inches<br>Width: " . $this->width . " inches<br>Money: " . $this->moneyGift . "<br>Message: " . $this->message . "<br>";
  }
}