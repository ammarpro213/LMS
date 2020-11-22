<?php
 $dbhost = "den1.mysql1.gear.host";
 $dbuser = "lmsdb12";
 $dbpass = "Mo3j41A9!9~W";
 $db = "lmsdb12";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  ?>
