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
/*print_r($_FILES['ff']);
exit;*/
$temp_loc=$_FILES['ff']['tmp_name'];
$fpath="item_image/".rand(00000000,99999999).$fname;
$type_arr=array("jpg","JPG","JPEG","jpeg","png","PNG");
$type=explode(".",$fname);
$ext=end($type);
if(in_array($ext,$type_arr)){
	if($fsize<=1024*1024*1.5 && $_FILES['ff']['error']==0){
		if(move_uploaded_file($temp_loc,"../../".$fpath)){
			
			$sql="INSERT INTO `items_table` (`name`,`price`,`spicy`,`type_id`,`fpath`) VALUES ('$name','$price','$spicy','$type_id','$fpath')";
			$res=mysqli_query($con,$sql) or die( mysqli_error($con));
				#echo $res;
				if($res==1){
					//echo "File uploaded successfully";
					echo "<script>alert('File uploaded successfully')</script>";
					header('location:items.php?msg=File uploaded successfully');
					exit;
				}else{
					//echo "File not upload";
					echo "<script>alert('File not upload');</script>";
					header('location:items.php?msg=File not upload');
					exit;
				}
		}else{
			//echo "File not upload";
			echo "<script>alert('Please try again');</script>";
			header('location:items.php?msg=Please try again');
			exit;
		}
	}
	else{
		echo "<script>alert('The image not more than 1.5MB')</script>";
		header('location:items.php?msg=The image not more than 1.5MB');
		exit;
	}
}else{
	echo "<script>alert('Please select jpg or jpeg or png image file')</script>";
	header('location:items.php?msg=Please select jpg or jpeg or png image file');
	exit;
}
?>