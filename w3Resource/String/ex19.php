<?php
  $string = "0009283902";

  function removeZeroes(&$string){
    $string = ltrim($string, "0");
  }

  removeZeroes($string);
  echo $string;
?>
