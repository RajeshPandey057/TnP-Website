<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
echo "Loging out......";
sleep(2);
header("location:login.php");
exit;
?>
