<?php
  $text = "The quick brown fox jumps over the lazy dog";
  $a = explode(" ", $text);

  for ($i = 0; $i < 5; $i++) {
    echo "$a[$i] ";
  }

  echo "<br>";
?>
