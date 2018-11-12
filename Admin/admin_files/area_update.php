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
		$id = $_GET['msg'];
		$src = "SELECT * FROM area_table WHERE area_id='$id'";
		$rs = mysqli_query($con, $src) or die(mysqli_error($con));
		$rec = mysqli_fetch_assoc($rs);
		$area_name = $rec['area_name'];
	?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><a href="area.php">Area</a></li>
        <li class="breadcrumb-item active">Update</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h3>Update Area</h3><br>
          <div class="col-6">
          	<form name="item" method="post">
            	<div class="form-group">
               		<label>Name of the Area</label>
                    <input type="text" name="area" class="form-control" required value="<?php echo $rec['area_name'];?>" autocomplete="off">
				</div>
                    <div class="row">
                    <div class="col-12">
                    <br>
                    <input type="submit" name="ok" class="btn btn-info" size="30" value="Save Changes">
             </form>  
					
						</div>
					</div>
                    <br>
                    <script>
							function dont_save()
							{
								if(confirm("Data not saved. \nAre you sure to leave?"))
									{
										window.location = "area.php";
									}
								else
								{
									window.location = "area_update.php?msg=<?php echo $id ?>";
								}
							}
			  		</script>
	     			 <a class="btn btn-success col-3 text-white" onClick="dont_save()">Back</a>
                </div>
          </div>
        </div>
      </div>
    </div>
   <?php
	if(isset($_POST["ok"]))
	{
		$area_name = $_POST['area'];
		$sql = "UPDATE area_table SET area_name='$area_name' WHERE area_id='$id'";
		$res=mysqli_query($con,$sql)or die(mysqli_error($con));
		if($res == 1)
		{
			echo '<script type="text/javascript">window.location = "area.php?msg=Area  update sucessfull";</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Sorry ! try again !")</script>';
		}
	}
	?>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>