<?php
	require("config.php");
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$src = "SELECT * FROM customer_table WHERE email='$email' AND password='$pass'";
	$rs = mysqli_query($con, $src) or die(mysql_error($con));
	if(mysqli_num_rows($rs) > 0)
	{
		$rec = mysqli_fetch_assoc($rs);
		$_SESSION['user_info'] = $rec;
		$_SESSION['cart'] = array();
		header("location: index.php");
	}
	else
	{
		header("location: login.php?msg=Invalid Email or Password.");
		exit();
	}
?>