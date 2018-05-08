<?php
  echo $b = memory_get_usage();
  echo "b<br>";

  echo $kb = (int)($b / 1024);
  echo "kb<br>";

  echo $mb = (int)($kb / 1024);
  echo "mb<br>";

  echo $gb = (int)($mb / 1024);
  echo "gb<br>";

  echo $tb = (int)($gb / 1024);
  echo "tb<br>";
?>
