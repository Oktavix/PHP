<?php
  $num = 112;

  function checkBits($num, $p1, $p2){
    $bin = decbin($num);

    if($bin{$p1} == $bin{$p2}) return true;

    return false;
  }

  echo checkBits($num, 2, 3)."<br>";
  echo checkBits($num, 3, 5)."<br>";
?>
