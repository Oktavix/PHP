<?php
  $s1 = "Hello World";
  $s2 = "World";

  function check($s1, $s2){
    $len1 = strlen($s1);
    $len2 = strlen($s2);

    if(substr($s1, $len1 - $len2, $len2) == $s2){
      return true;
    }

    return false;
  }

  echo check($s1, $s2);
?>
