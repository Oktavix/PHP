<?php
  $string = "Hello There World";
  $string = strtoupper($string);
  echo "$string<br>";

  $string = strtolower($string);
  echo "$string<br>";

  $string{0} = strtoupper($string{0});
  echo "$string<br>";

  $a = explode(" ", $string);

  for ($i = 0; $i < sizeof($a); $i++) {
    $a[$i]{0} = strtoupper($a[$i]{0});
  }

  $string = implode(" ", $a);
  echo "$string<br>";
?>
