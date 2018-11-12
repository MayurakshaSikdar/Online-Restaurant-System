<?php require("config.php"); ?>
<?php
$area_id= $_GET['msg'];
$del="DELETE FROM area_table WHERE area_id=$area_id";
$res=mysqli_query($con,$del)or die(mysqli_error($con));
if($res==1){
   header('location:area.php');
   exit;
}else{
   header('location:area.php');
   exit;
}

?>