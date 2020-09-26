<?php

class Dog {

  public $name;
  public $weight;

  public function __construct($name, $weight){
     $this->name = $name ;
     $this->weight = $weight;
  }

  public function bark(){
    print_r( $this->name. " says woof woof" );
  }
}


 class Coyote extends Dog{

  public function bark(){
    echo  " says woof, oh MOTHERFUCKIN-WOOF";
  }

  public function kill(){
    var_dump( $this->name. " just killed you dead!" );
  }
}

$amy = new Dog("Amy", 25);
var_dump( $amy->name );
$amy->bark();

$zoe = new Dog("Zoe", 35);
 var_dump( $zoe->name);
 $zoe->bark();

$danger = new Coyote("Fkin Monster", 12);
var_dump( $danger->name );
$danger->kill();