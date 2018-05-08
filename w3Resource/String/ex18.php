<?php
  function getFirstWord($string){
    return explode(" ", $string)[0];
  }

  $string = "Hello There Friend";
  echo getFirstWord($string);
?>
