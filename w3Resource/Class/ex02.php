<?php
  class MyClass{
    public function __construct(){
      echo "Hello my name is ".$this->introduce("Steve");
    }

    public function introduce($njam){
      return $njam;
    }
  }

  $steve = new MyClass;

?>
