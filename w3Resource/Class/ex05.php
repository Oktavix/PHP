<?php
  $sdate = new DateTime("1981-11-03");
  $edate = new DateTime("2013-09-04");

  $dif = $sdate->diff($edate);

  echo $dif->y." ".$dif->m." ".$dif->d;
?>
