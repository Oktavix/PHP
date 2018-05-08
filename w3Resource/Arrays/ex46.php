<?php
  $a = array("string1", "hello", "njam");

  function fn01($a){
    foreach($a as $e){
      if(!is_string($e)) return false;
    }

    return true;
  }

  echo fn01($a);
?>
