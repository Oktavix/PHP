<?php
 $user_ip = $_SERVER['REMOTE_ADDR'];

  function echo_ip(){
    //echo $user_ip;        //wouldn't work
    global $user_ip;        //now it works
    echo $user_ip;
  }

  echo_ip();
?>
