<?php
  $con1 = mysqli_connect("localhost", "root", "");      //connects to a host
  $db1 = mysqli_select_db($con1, "users") || die("Database doesn't exist");   //connects to a database
  echo "Connected!<br>";

  $query = "SELECT * FROM user";      //query
  $query_run = mysqli_query($con1, $query);     //query runs

  while($query_row = mysqli_fetch_assoc($query_run)){     //fetch data from query_run
    echo $query_row["id"].'<br>';
    echo $query_row["username"].'<br>';
    echo $query_row["password"].'<br>';
  }
?>
