<?php
  $string = "082307";
  $string = chunk_split($string, 2, ":");
  $string{strlen($string) - 1} = " ";

  echo $string;
?>
