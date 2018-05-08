<?php
  class MyClass{
    public function __construct(&$a){
      sort($a);
    }
  }

  $a = array(1, 9, 2, 3, 8, 2);

  $c = new MyClass($a);

  print_r($a);
?>
