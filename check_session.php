<?php
if(empty($_SESSION['user_info'])){
	header('location:login.php');
	exit;
}
?>