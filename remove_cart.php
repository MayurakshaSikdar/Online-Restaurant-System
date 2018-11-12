<?php
	require("config.php");
	if(empty($_SESSION['user_info'])){
		echo "Please login yourself";
	}
	else{
		$cart_id = $_POST['cart_id'];
		$sql = mysqli_query($con, "DELETE FROM `cart_table` WHERE `cart_id`=$cart_id") or die(mysqli_error($con));
		if($sql==1)
			echo "Cart Item Removed Successfully";
		else
			echo "Sorry! Try again.";
	}
?>