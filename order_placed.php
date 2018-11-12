<?php require("config.php")?>
<?php
	$query = mysqli_query($con,"SELECT c.qty, i.items_id FROM cart_table c INNER JOIN items_table i ON c.items_id=i.items_id WHERE c.id=".$_SESSION['user_info']['id']." AND c.status='0'") or die(mysqli_error($con));
	
	$sub_id = $_SESSION['orderDetails'][6];
	$contact_no = $_SESSION['orderDetails'][3];
	$id = $_SESSION['orderDetails'][0];
	$delivery_address = $_SESSION['orderDetails'][4];
	$date = date("Y-m-d");
	while($rec = mysqli_fetch_assoc($query))
	{
		$qty = $rec['qty'];
		$items_id = $rec['items_id'];
		$insert = mysqli_query($con, "INSERT INTO `order_table`(`quantity`, `items_id`, `id`, `sub_id`, `contact_no`, `delivery_address`, `order_date`) VALUES ('$qty', '$items_id', '$id', '$sub_id', '$contact_no', '$delivery_address', '$date')") or die(mysqli_error($con));
	}
	$src = mysqli_query($con, "UPDATE `cart_table` SET `status` = '1' WHERE `id` = '$id' AND `status` = '0'") or die(mysqli_error($con));
	$mail_query = mysqli_fetch_assoc(mysqli_query($con, "SELECT `c_name`, `email` FROM `customer_table` WHERE `id`='$id'") or die(mysqli_error($con)));
	$to = $mail_query['email'];
	$subject = "Order Placed";
	$txt = "Greetings ".$mail_query['c_name']."!"."
			<br><br>
			<h3>Your order has been successfully placed.<br>
				Please wait while we prepare your order.<br><br><br><br><br>
				Delivery Address : ".$delivery_address."<br><br>
				Pay : ".$_SESSION['user_info'][7].";<br>
			</h3>"
		;
//	$headers = "From: mayurakshasikdar@yahoo.com" . "\r\n" ."CC: somebodyelse@example.com";

	mail($to,$subject,$txt);
?>