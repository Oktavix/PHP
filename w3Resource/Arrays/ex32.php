<?php
  $file = "image.jpg";

  $start = strpos($file, ".");

  $extension = substr($file, $start + 1, strlen($file));

  echo $extension;
?>
