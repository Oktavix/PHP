<?php
  $address = "https://www.w3resource.com/php-exercises/php-basic-exercises.php";
  $url = parse_url($address);     //returns an associative array which has all of the components of the url

  echo $scheme = $url["scheme"]."<br>";
  echo $host = $url["host"]."<br>";
  echo $path = $url["path"]."<br>";
?>
