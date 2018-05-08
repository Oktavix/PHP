<?php

  if(isset($_GET["name"])){
    echo $_GET["name"];
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="ex04.php" method="get">
      <input type="text" name="name" value="">

      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
