<?php
  include("session.php");
  session_destroy();    //logs user out

  die("Logged out<br>");
?>
