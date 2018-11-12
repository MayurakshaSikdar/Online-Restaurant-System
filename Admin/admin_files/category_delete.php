<?php require("config.php"); ?>
<?php
$id=$_GET['id'];
$del="DELETE FROM type_table WHERE type_id=$id";
$res=mysqli_query($con,$del)or die(mysqli_error($con));
if($res==1){
   header('location:category.php?msg=category record delete sucessfully');
   //echo "category record delete sucessfully";
   exit;
}else{
   //echo "category record not delete";
   header('location:category.php?msg=category record not delete');
   exit;
}

?>