<?php require("config.php");  ?>
<?php
if(!empty($_SESSION['user_info']) && !empty($_SESSION['cart'])){
	echo '<script>confirm("Items in your cart will be removed")</script>';
	header('location:login.php');
}
else{
	session_destroy();
	header('location:login.php');
	exit;
}
?>