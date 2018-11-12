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
        <li class="breadcrumb-item active">Add New</li>
      </ol>
      <div class="row">
        <div class="col-12">
        <h3>Add New Location</h3>

		  
		  
	<div class="col-6">
          	<form name="item" method="post">
            	<div class="form-group">
                
	<select name="area_id" class="form-control">
	<?php 
	$src = "SELECT * FROM area_table";
	$rs=mysqli_query($con, $src) or die(mysqli_error($con));
	 
			$rec = "SELECT area_name FROM area_table";
			?>
			<option value="select" >---Select---</option>
			<?php
			while ($rec= mysqli_fetch_assoc($rs)){
			   echo '<option value="'.$rec['area_id'].'">' . $rec['area_name'] . '</option>';
			}
		?>
	</select>
                </div>
          </div>
		  
		  
		  
          <div class="col-6">
          	
            	<div class="form-group">
                	<label>Enter The Name of the Location</label>
                    <input type="text" name="sub_name" class="form-control">
                </div>
				<div class="row">
                    <div class="col-12">
                    <input type="submit" name="ok" class="btn btn-info" value="Add Location">
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
		$sub_name = $_POST["sub_name"];
	
		
		$src = "SELECT sub_name FROM sub_area_table WHERE sub_name='$sub_name' AND area_id='$area_id'";
		$rs=mysqli_query($con,$src) or die(mysqli_error($con));
		if(mysqli_num_rows($rs)>0){
			echo "<script>alert('Already Exist');</script>";
		}else
		{
			$sql = "INSERT INTO sub_area_table (area_id,sub_name)VALUES('$area_id','$sub_name')";	
			$res = mysqli_query($con, $sql) or die(mysqli_error($con));
			if($res == 1)
			{
				echo "<script>alert('Successfully Added');</script>";
			}
			else
			{
				echo "<script>alert('Sorry ! try again')</script>";
			}
		}
	}
?>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>