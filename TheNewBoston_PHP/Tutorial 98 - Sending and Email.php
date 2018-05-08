<?php
  $to = "igor.rafailovic@gmail.com";
  $subject = "This is an email";
  $body = "Hello hello helloooooooooooooo";
  $headers = "From: testic2018@gmail.com";

  mail($to, $subject, $body, $headers);

  echo "Mail sent<br>";
?>
