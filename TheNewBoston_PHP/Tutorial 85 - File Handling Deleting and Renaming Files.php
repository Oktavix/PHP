<?php
  unlink("delete.txt");
  echo "File deleted<br>";

  rename("rename.txt", "renamed.txt");
  echo "File renamed<br>";
?>
