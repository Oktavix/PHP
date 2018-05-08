<?php
  $address = "http://google.com";
  $url = parse_url($address);
  $scheme = $url["scheme"];

  if($scheme == "http"){
    echo "HTTP";

  } else if($scheme == "https"){
    echo "HTTPS";
  }
?>
