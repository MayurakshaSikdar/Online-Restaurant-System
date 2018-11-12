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
       <li class="breadcrumb-item active"><a href="category.php">Category</a></li>     
        <li class="breadcrumb-item active">Add New</li>
       </ol>
      <div class="row">
        <div class="col-12">
          <h3>Add New category</h3>
          <div class="col-6">
          	<form name="item" method="post">
            	<div class="form-group">
                	<label>Enter Name of the Type</label>&nbsp &nbsp &nbsp
					<select name="type_name" class="form-control dropdown">
                    <option value="def" class="dropdown-item">--Select Type--</option>
					<option value="Veg">Veg</option>
					<option value="Non-Veg">Non-Veg</option>
					</select>
				</div>
				<div class="form-group">
                	<label>Enter Name of the Category</label>
                    <input type="text" name="category" class="form-control">
				</div>
				<input type="submit" class="btn btn-primary" name="ok" value="Add New">
            </form>
          </div>
        </div>
      </div>
      <?php
			if(isset($_POST["ok"]))
			{
			  if($_POST["category"]!=NULL && $_POST["type_name"]!='def')
			  {

				$type_name = $_POST["type_name"];
				$category = $_POST["category"];
				$src = "SELECT type_name, category FROM type_table WHERE type_name='$type_name' AND category='$category' ";
				$rs=mysqli_query($con,$src) or die(mysqli_error($con));
				if(mysqli_num_rows($rs)>0){
					echo "<br>This category of this Type Already Exists!";
				}else
				{
					$sql = "INSERT INTO type_table (type_name, category) VALUES('$type_name', '$category')";	
					$res = mysqli_query($con, $sql) or die(mysqli_error($con));
					if($res == 1)
					{
						echo "<br>The Category has been Entered Successfully";
					}
					else
					{
						echo "<br>Sorry ! try again";
					}
				}
			  }
			else
			{
				echo "Please Enter Valid Category";
			}	
		}
	?>
      
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>