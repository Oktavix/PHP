<?php
  include("session.php");

  $_SESSION["name"] = "LoginSession";

  if($_POST["username"] != "" && $_POST["password"] != ""){   //checking username and password if they're blank
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(ctype_alnum($username) && ctype_alnum($password)){   //checking if username and password are alphanumerical
      $connection = mysqli_connect("localhost", "root", "", "registration_test") or die("Could not connect<br>"); //connect to db
      echo "Connected to database<br>";
      echo "Checking username and password...<br>";

      $enc_password = md5($password);   //encrypt password

      $result = mysqli_query($connection, "SELECT username, password FROM users
        WHERE username = '$username' AND password = '$enc_password'");    //mysql query

      if(mysqli_num_rows($result) == 0){    //checking if 0 rows are returned meaning that username or password is not correct
        echo "Username or password not correct<br>";

      } else if(mysqli_num_rows($result) == 1){ //checking if 1 row is returned meaning that everything is correct
        echo "Logged in<br>";

      } else{   //unknown error
        die("Error<br>");
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

  </head>
  <body>
    <form action="logout.php" method="get">
      <input type="submit" name="logout" value="Logout">  <!-- logout button -->
    </form>
  </body>
</html>
