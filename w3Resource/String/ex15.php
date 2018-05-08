<?php
  function removePart(&$string, $pos){
    $string = substr($string, $pos);
  }

  $string = "Hello World";
  removePart($string, 6);

  echo $string;
?>
