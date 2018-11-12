<?php
	require("config.php");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['contactNo'];
	$pass = $_POST['password'];
	$conPass = $_POST['confirmPassword'];
	$address = $_POST['address'];
	$src = "SELECT * FROM customer_table WHERE email='$email' OR contact_no='$email'";
	$rs = mysqli_query($con, $src) or die(mysqli_error($con));
	if(mysqli_num_rows($rs) > 0)
	{
		header("location: register.php?msg=User Already Exists !");
		exit();
	}
	elseif(strcmp($conPass, $pass) == 0)
	{
		$src = "INSERT INTO customer_table(c_name, email, password, contact_no, address) VALUES ('$name', '$email', '$pass', '$mobile', '$address')";
		$rs = mysqli_query($con, $src) or die(mysqli_error($con));
		$sr = "SELECT * FROM customer_table WHERE email='$email'";
		$r = mysqli_query($con, $sr) or die(mysqli_error($con));
		$rec = mysqli_fetch_assoc($r);
		$_SESSION['user_info'] = $rec;
		header("location: index.php");
	}
	else
	{
		header("location: register.php?msg=Password Doesn't Match !");
		exit();
	}
?>