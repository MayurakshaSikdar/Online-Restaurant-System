<?php
	require("config.php");
	$_SESSION['login'] = 0;
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$src = "SELECT * FROM admin_table WHERE username='$email' AND password='$pass'";
	$rs = mysqli_query($con, $src) or die(mysql_error($con));
	if(mysqli_num_rows($rs) > 0)
	{
		$rec = mysqli_fetch_assoc($rs);
		$_SESSION['user'] = $rec;
		$_SESSION['login'] = 1;
		header("location: index.php");
	}
	else
	{
		header("location: login.php?msg=Invalid Email or Password.");
		exit();
	}
?>