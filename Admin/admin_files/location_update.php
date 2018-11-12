<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Indian Restaurant</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php require("header.php") ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><a href="location.php">Delivery Locations</a></li>
        <li class="breadcrumb-item active">Update</li>
      </ol>
      <div class="row">
        <div class="col-12">
        <h3>Update Location</h3>
		<br>
		  <?php $id = $_GET['id'];
				$src = "SELECT * FROM sub_area_table WHERE sub_id='$id'";
				$rs = mysqli_query($con, $src) or die(mysqli_error($con));
				$rec = mysqli_fetch_assoc($rs);
				$sql = "SELECT * FROM area_table";
				$r = mysqli_query($con, $sql) or die(mysqli_error($con));
			?>
		  
	<div class="col-4">
          	<form name="item" method="post">
            	<div class="form-inline">
                	<table class="dropdown" cellpadding="10">
					<tr>	
							<td><h5>Area&nbsp; &nbsp;</h5></td>
							<td><select name="area_id" class="form-inline btn btn-secondary">
							<div class="dropdown-menu">
							<option value="select">---Select---</option>
							<?php
								while ($res= mysqli_fetch_assoc($r))
								{
								   	if($res["area_id"] == $rec["area_id"]){
										echo '<option name="area" value="'.$res['area_id'].'" selected class="text-center">' . $res['area_name'] . '</option>';}
									else
										echo '<option name="area" value="'.$res['area_id'].'" class="text-center">' . $res['area_name'] . '</option>';
								}
							?></div>
					</select></td>
					</tr>
					<tr>
						<td><h5>Location</h5></td>
						<td><input type="text" name="sub" size="20" value="<?php echo $rec['sub_name']?>" class="text-center"></input></td>
          			</tr>
           		</table>
            </div>

        
         <div class="col-6">
          	
				<div class="row">
                    <div class="col-12">
                    <br>
                    <input type="submit" name="ok" class="btn btn-info col-6" value="Save">
						</div>
					</div>
            </form>
          </div>
        </div>
      </div>
    </div>
	<?php
	if(isset($_POST["ok"]))
	{
	    $area_id = $_POST["area_id"];
		$sub = $_POST['sub'];
		/*$src = "SELECT sub_name FROM sub_area_table WHERE sub_name='$sub_name'";
		$rs=mysqli_query($con,$src) or die(mysqli_error($con));
		if(mysqli_num_rows($rs)>0){
			echo "<script>alert('Already Exist');</script>";
		}else
		{
			*/
			$sql = "UPDATE sub_area_table SET area_id='$area_id', sub_name='$sub' WHERE sub_id='$id'";	
			$res = mysqli_query($con, $sql) or die(mysqli_error($con));
			if($res == 1)
			{
				echo "<script>window.location='location.php'; alert('Successfully Added');</script>";
			}
			else
			{
				echo "<script>alert('Sorry ! try again')</script>";
			}
		//}
	}
?>
	  </div></div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>