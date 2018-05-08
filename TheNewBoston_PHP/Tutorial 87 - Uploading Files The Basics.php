<?php
  $name = $_FILES["file"]["name"];
  $size = $_FILES["file"]["size"];      //size is in bytes
  $type = $_FILES["file"]["type"];

  $tmp_name = $_FILES["file"]["tmp_name"];      //location
  echo $tmp_name;

  move_uploaded_file($tmp_name, "uploads/$name");  //uploads a file     move_uploaded_file(temp_location, upload_location)

  echo "File Uploaded<br>";
?>

<form action="Tutorial 87 - Uploading Files The Basics.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file"><br><br>

  <input type="submit" value="Submit">
</form>
