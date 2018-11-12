<?php require("config.php");
$id= $_GET['id'];
$del="DELETE FROM sub_area_table WHERE sub_id='$id'";
$res=mysqli_query($con,$del)or die(mysqli_error($con));
if($res==1){
   header('location:location.php');
   exit;
}else{
   header('location:location.php');
   exit;
}

?>