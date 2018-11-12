<?php require('config.php');
	  require('check_session.php');
 ?>

<?php
$fname=$_FILES['ff']['name'];
$ftype=$_FILES['ff']['type'];
$fsize=$_FILES['ff']['size'];
$name=$_POST['name'];
$type_id=$_POST['type_id'];
$spicy=$_POST['spicy'];
$price=$_POST['price'];
$items_id=$_POST['items_id'];
/*print_r($_FILES['ff']);
exit;*/
if(empty($_FILES['ff']['name'])){
	echo "Hi";
	$upd="UPDATE `items_table` SET `name`='$name',`price`='$price',`spicy`='$spicy',`type_id`='$type_id' WHERE `items_id`='$items_id' ";
	echo $upd;
	$res=mysqli_query($con,$upd) or die( mysqli_error($con));
		if($res==1){
			//echo "File uploaded successfully";
			header('location:items.php?msg=File uploaded successfully');
			exit;
		}else{
			//echo "File not upload";
			header('location:items.php?msg=File not upload');
			exit;
		}
}else{
	$temp_loc=$_FILES['ff']['tmp_name'];
	$fpath="item_image/".rand(00000000,99999999).$fname;
	$type_arr=array("jpg","JPG","JPEG","jpeg","png","PNG");
	$type=explode(".",$fname);
	$ext=end($type);
	if(in_array($ext,$type_arr)){
		if($fsize<=1024*1024*1.5 && $_FILES['ff']['error']==0){
			if(move_uploaded_file($temp_loc,"../../".$fpath)){
				$upd="UPDATE `items_table` SET `name`='$name',`price`='$price',`spicy`='$spicy',`type_id`='$type_id',`fpath`='$fpath' WHERE `items_id`='$items_id' ";
				$res=mysqli_query($con,$upd) or die( mysqli_error($con));
					#echo $res;
					if($res==1){
						//echo "File uploaded successfully";
						header('location:items.php?msg=File uploaded successfully');
						exit;
					}else{
						//echo "File not upload";
						header('location:items.php?msg=File not upload');
						exit;
					}
			}else{
				//echo "File not upload";
				header('location:items.php?msg=Please try again');
				exit;
			}
		}
		else{
			header('location:items.php?msg=The image not more than 1.5MB');
			exit;
		}
	}else{
		header('location:items.php?msg=Please select jpg or jpeg or png image file');
		exit;
	}
}
?>