<?php
  class MyClass{
    public function __construct($n){
      echo $this->squared($n);
    }

    private function squared($n){
      return pow($n, 2);
    }
  }

  $c = new MyClass(5);

?>
