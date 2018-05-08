<?php
  if($_POST["username"] != "" && $_POST["password"] != "" && $_POST["repeat_password"] != ""){
    $username = $_POST["username"];   //checks if values are blank
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat_password"];

    if(ctype_alnum($username)){
      $connection = mysqli_connect("localhost", "root", "", "registration_test") or die("Could not connect<br>");
      echo "Connected to database<br>";   //checks if username is alphanumerical
      echo "Checking username...<br>";

      $result = mysqli_query($connection, "SELECT username FROM users WHERE username = '$username'"); //check users

      if(mysqli_num_rows($result) == 0){    //checks if username already exists
        echo "Username is free<br>";

        if($password == $repeat_password){    //checks if password was repeated correctly
          $enc_password = md5($password);

          $result = mysqli_query($connection, "INSERT INTO users(username, password) VALUES('$username', '$enc_password')");

          if($result){    //if result is true then the query executed properly and a new user is added
            echo "New user successfully created<br>";

          } else{
            echo "Error<br>";   //query failed
            echo mysqli_error($connection);   //displays error
          }

          mysqli_close($connection);    //closes connection

        } else{
          die("Passwords not repeated correctly<br>");
        }


      } else{
        die("User already exists<br>");
      }

    } else{
      echo "Username is not alphanumeric<br>";
    }

  } else{
    echo "Username or password is not set<br>";
  }

?>
