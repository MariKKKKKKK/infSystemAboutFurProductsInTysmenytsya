<?php
header('Content-type: text/html; charset = utf-8')
?>
<?php
session_start(); 

session_destroy(); 

echo "<script>window.open('login.php','_self')</script>";




?> 