<?php
  $num1 = 153;
  $num2 = 21;
  $num3 = 4587;

  function armstrong($num){
    $len = strlen($num);

    $n = $num;
    $sum = 0;

    while($n > 0){
      $sum += pow($n % 10, 3);
      $n /= 10;
    }

    if($sum == $num) return true;

    return false;
  }

  echo armstrong($num1)."<br>";
  echo armstrong($num2)."<br>";
  echo armstrong($num3)."<br>";
?>
