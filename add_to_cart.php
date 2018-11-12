<?php
require("config.php");
if(empty($_SESSION['user_info'])){
	echo "Please login yourself";
}else{
	$items_id=$_POST['items_id'];
	$qty=$_POST['qty'];
	$id=$_SESSION['user_info']['id'];
	
	$src=mysqli_query($con,"SELECT * FROM `cart_table` WHERE `items_id`='$items_id' AND `id`='$id' AND `status`='0'") or die(mysqli_error($con));
	if(mysqli_num_rows($src)>0){
		$rec = mysqli_fetch_assoc($src);
		$new_qty = $rec['qty'] + $qty;
		$upt = mysqli_query($con,"UPDATE `cart_table` SET `qty`='$new_qty' WHERE `cart_id`=".$rec['cart_id']) or die(mysqli_error($con));
		if($upt==1){
			echo "Item added to cart";
		}else{
			echo "Sorry try again";
		}
	}else{
		//print_r($_POST);
		
		$cart_date=date("d-m-Y");
		$sql=mysqli_query($con,"INSERT INTO `cart_table` (`id`,`items_id`,`qty`,`cart_date`) VALUES ('$id','$items_id','$qty','$cart_date')")or die(mysqli_error($con));
		if($sql==1){
			echo "Item added to cart";
		}else{
			echo "Items does not cart";
		}
	}
	
}
?>