<?php

class User{
   
  public $first_name;
  public $last_name;
  public $email;
  public $avatar;

  public function __construct($first_name, $last_name){
    $this->first_name = $first_name;
    $this->last_name = $last_name;
  }
  public function full_Name(){
    print_r( $this->first_name. "hello there");
  }
  
}

$leo = new User("Leo", 12);
print_r($leo->first_name);
$leo->full_Name();

?>