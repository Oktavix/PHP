<?php
  ob_start();   //starts loading data into a buffer so header() function works later
?>

<h1>My Page</h1>
This is my page;

<?php
  $redirect_page = "http://google.com";
  $redirect = false;

  if($redirect){
      header("Location: $redirect_page");     //redirects you to another webpage "Location: " is necessary
  }

  ob_end_clean();     //cleans buffer
?>
