<?php
  $a = array(78, 60, 62, 68, 71, 68, 73,
            85, 66, 64, 76, 63, 75, 76, 73,
            68, 62, 73, 72, 65, 74, 62, 62,
            65, 64, 68, 73, 75, 79, 73);

  $sum = 0;

  foreach ($a as $value) {
    $sum += $value;
  }

  echo "Average temperature: ".$sum / sizeof($a)."<br>";
  echo "<br>";

  sort($a);
  echo "Lowest 5 temperatures:<br>";
  for ($i=0; $i < 5; $i++) {
    echo "$a[$i]<br>";
  }

  echo "<br>";

  echo "Highest 5 temperatures:<br>";
  rsort($a);
  for ($i=0; $i < 5; $i++) {
    echo "$a[$i]<br>";
  }
?>
