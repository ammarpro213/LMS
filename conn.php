<?php
 $dbhost = "den1.mysql3.gear.host";
 $dbuser = "lmsdb1";
 $dbpass = "Yt9utxB-~143";
 $db = "lmsdb1";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  ?>