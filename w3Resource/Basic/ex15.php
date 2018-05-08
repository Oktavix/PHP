<?php
  $filepath = realpath("ex01.php");
  $filename = basename($filepath);

  echo date("l M Y H:i:s", filemtime($filename));
?>
