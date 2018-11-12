<?php require("config.php");  ?>
<?php
session_destroy();
header('location:login.php');
exit;
?>