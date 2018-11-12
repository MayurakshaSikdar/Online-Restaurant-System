<?php require('config.php');
	  require('check_session.php');
 ?>
<?php 
	if('<script type="text/javascript">confirm("Delete this ITEM ?")</script>')
	{
		$d = $_GET['id'];
		$del = "DELETE FROM items_table WHERE items_id = '$d'";
		$rs = mysqli_query($con, $del) or die(mysqli_error($con));
		header('location: items.php');
	}
	else
	{
		header('location: items.php');
	}
?>