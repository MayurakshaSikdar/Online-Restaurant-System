<?php
	require("config.php");
	if(empty($_SESSION['user_info'])){
		echo "Please login yourself";
	}
	else{
		if($_POST['qty']>=1){
		$cart_id = $_POST['cart_id'];
		$qty = $_POST['qty'];
		$sql = mysqli_query($con, "UPDATE `cart_table` SET `qty` = '$qty' WHERE `cart_id`=$cart_id") or die(mysqli_error($con));
		if($sql==1)
			echo "Cart Item Updated Successfully";
		else
			echo "Sorry! Try again.";
		}else{
			echo "The quantity cant not be zero";
		}
	}
?>