<?php
  echo "Hello";

  //die() or exit() they are the same

  echo " World<br>";

  @mysqli_connect("localhost", "root", "") || die("Could not connect to database");

  //@ supresses the error message 

  echo "Connected";
?>
