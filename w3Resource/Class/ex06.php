<?php
  class Calculator{
    public function __construct(){

    }

    public function add($n1, $n2){
      return $n1 + $n2;
    }

    public function subtract($n1, $n2){
      return $n1 - $n2;
    }
  }

  $calc = new Calculator();

  echo $calc->add(2, 3);
?>
