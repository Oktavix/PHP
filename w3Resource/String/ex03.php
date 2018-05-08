<?php
  $text = "The quick brown fox jumps over the lazy dog";
  $s1 = "jumps";

  if(strpos($text, $s1) == false){
    echo "Doesn't contain<br>";

  } else{
    echo "Contains<br>";
  }
?>
