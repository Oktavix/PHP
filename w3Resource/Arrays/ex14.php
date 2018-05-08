<?php
  $a = array("husein", "njam", "plje", "kme");
  $lens = array_map("strlen", $a);    //array_map sends each value of array to a specified function

  echo min($lens)."<br>";
  echo max($lens)."<br>";
?>
