<?php
  echo $_SERVER['PHP_SELF'];        //filename of the currently executing script
  echo "<br>";

  echo $_SERVER['SERVER_NAME'];     //name of the host server
  echo "<br>";

  echo $_SERVER['HTTP_HOST'];       //host header from the current request
  echo "<br>";

  echo $_SERVER['HTTP_REFERER'];    //complete URL of the current page
  echo "<br>";

  echo $_SERVER['SCRIPT_NAME'];     //path of the current script
  echo "<br>";

  echo $_SERVER['SERVER_ADDR'];     //ip address of the host server
  echo "<br>";

  echo $_SERVER['REQUEST_METHOD'];  //method used to access the page (post/get)
  echo "<br>";

  echo $_SERVER['SERVER_PORT'];     //server port
  echo "<br>";

  //...
?>
