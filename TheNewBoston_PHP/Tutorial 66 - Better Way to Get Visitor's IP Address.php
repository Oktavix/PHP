<?php
  $http_client_ip = $_SERVER["HTTP_CLIENT_IP"];             //doesn't work on localhost
  $http_x_forwarded_for = $_SERVER["HTTP_X_FORWADED_FOR"];  //doesn't work on localhost
  $remote_addr = $_SERVER["REMOTE_ADDR"];

  if(!empty($http_client_ip)){
    $ip_address = $http_client_ip;

  } else if(!empty($http_x_forwarded_for)){
    $ip_address = $http_x_forwarded_for;

  } else{
    $ip_address = $remote_addr;
  }

  echo "$ip_address<br>";
?>
