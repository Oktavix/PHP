<?php
  //$GLOBALS["var"] holds all global variables
  $num = 10;    //automaticaly global

  function fn1(){
    echo $GLOBALS["num"];
    echo "<br>";
  }

  function fn2(){
    global $num2;   //global
    $num2 = 15;
  }

  function fn3(){
    $GLOBALS["num3"] = 20;    //you can put it directly into $GLOBALS array
  }

  fn1();
  fn2();
  fn3();

  echo $GLOBALS["num2"];
  echo $GLOBALS["num3"];
?>
