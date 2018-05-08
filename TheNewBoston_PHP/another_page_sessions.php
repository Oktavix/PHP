<?php
  session_start();

  if(isset($_SESSION["username"])){
    echo "Welcome , ".$_SESSION["username"];

  } else{
    echo "Please log in<br>";
  }

  unset($_SESSION["username"]);
  session_destroy();    //destroys all sessions
?>
