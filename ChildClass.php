<?php 
	// this file will extend ParentClass.php
include_once("ParentClass.php");

class BirthdayCard extends Card{
  protected $recipient="";

  public function __construct($l,$w,$c,$money,$message,$recipient){
    parent::__construct($l,$w,$c,$money,$message);
    $this->recipient=$recipient;
  }

  public function __destruct()
  {
    echo "Deleting the Birthday Card.";
  }

  public function changeMessage($newMessage){
    echo "The old message was " . $this->message . "<br>";
    $this->message=$newMessage;
    echo "Now the message is " . $this->message . "<br>";
  }

  public function changeMoney($newMoney){
    echo "The old money value was " . $this->moneyGift . "<br>";
    $this->moneyGift=$newMoney;
    echo "Now the money value is " . $this->moneyGift . "<br>";
  }

  public function changeWidth($newWidth){
    echo "The old width was " . $this->width . "<br>";
    $this->width=$newWidth;
    echo "Now the width is " . $this->width . "<br>";
  }

  public function changeLength($newLength){
    echo "The old length was " . $this->length . "<br>";
    $this->length=$newLength;
    echo "Now the length is " . $this->length . "<br>";
  }

  public function changeColor($newColor){
    echo "The old color was " . $this->color . "<br>";
    $this->color=$newColor;
    echo "Now the color is " . $this->color . "<br>";
  }

  public function changeRecipient($newRecip){
    echo "The old recipient was " . $this->recipient . "<br>";
    $this->recipient=$newRecip;
    echo "Now the recipient is " . $this->recipient . "<br>";
  }

  public function getLength(){
    return $this->length;
  }

  public function getWidth(){
    return $this->width;
  }

  public function getColor(){
    return $this->color;
  }

  public function getMoney(){
    return $this->moneyGift;
  }

  public function __toString(){
    return "Color: " . $this->color . "<br>Recipient: " . $this->recipient . "<br>Length: " . $this->length . " inches<br>Width: " . $this->width . " inches<br>Money: " . $this->moneyGift . "<br>Message: " . $this->message . "<br>";
  }

}
