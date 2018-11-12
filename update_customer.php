<?php
	require("config.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$query = mysqli_query($con, "UPDATE `customer_table` SET `c_name`='$name', `Contact_no`='$mobile', `Address`='$address' WHERE `id`='$id'") or die(mysqli_error($con));
	$_SESSION['user_info']['c_name'] = $name;
	$_SESSION['user_info']['Contact_no'] = $mobile;
	$_SESSION['user_info']['Address'] = $address;
	echo 'Details Updated';
?>