<?php
header('Content-type: text/html; charset = utf-8')
?>
<?php
// After uploading to online server, change this connection accordingly

$con = mysqli_connect("localhost","root","","infsystem");
mysql_query("SET NAMES 'utf8mb4'");
mysql_query("SET NAMES utf8mb4 COLLATE 'utf8mb4_unicode_ci'");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>