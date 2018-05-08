<?php
  $url = "http://www.example.com/5478631";
  $pos = strrpos($url, "/");
  echo substr($url, $pos + 1);
?>
