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
  <?php require("header.php");
	?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><a href="area.php">Area</a></li>
        <li class="breadcrumb-item active">Add New</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h3>Add New Area</h3><br>
          <div class="col-6">
          	<form name="item" method="post">
            	<div class="form-group">
                	<label>Enter The Name of the Area</label>
                    <input type="text" name="area_name" class="form-control" required autocomplete="off">
					
				</div>
                    <div class="row">
                    <div class="col-12">
                    <input type="submit" name="ok" class="btn btn-info" value="Add Area">
                   </form>  
					
						</div>
					</div>
                    <br>
	     			 <a href="area.php" class="btn btn-success">Back</a>
                </div>
          </div>
        </div>
      </div>
    </div>
   <?php
	if(isset($_POST["ok"]))
	{
	    $area_name = $_POST["area_name"];
		$src = "SELECT * FROM area_table WHERE area_name='$area_name'";
		$rs=mysqli_query($con,$src) or die(mysqli_error($con));
		if(mysqli_num_rows($rs)>0){
			echo '<script type="text/javascript">alert("Already Exist !")</script>';
		}
		else
		{
			$sql = "INSERT INTO area_table(area_name) VALUES ('$area_name')";
			$res = mysqli_query($con, $sql) or die(mysqli_error($con));
			if($res == 1)
			{
				echo '<script type="text/javascript">alert("Successfully Added !"); window.location="area.php"</script>';
			}
			else
			{
				echo '<script type="text/javascript">alert("Sorry ! try again !")</script>';
			}
		}
	}
?>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>