<?php
  $password_length = 10;
  $password_pool = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
  $password_pool = str_shuffle($password_pool);
  echo $password = substr($password_pool, 0, $password_length);
  //echo $password_pool;
?>
