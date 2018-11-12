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
        <li class="breadcrumb-item active"><a href="items.php">Items</a></li>
        <li class="breadcrumb-item active">Add New</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h3>Add New Items</h3>
          <div class="col-6">
          	<form name="add_item" id="add_item" method="post" enctype="multipart/form-data" action="items_add_code.php">
          		<div class="form-group">
          			<label>Select Category</label>
          			<?php
					$src=mysqli_query($con,"SELECT * FROM `type_table`") or die(mysqli_error($con));
					?>
          			<select name="type_id" class="form-control" required>
          			<option value="" selected>-Select-</option>
          			<?php
					
						while($rec=mysqli_fetch_assoc($src)){
							?>
							<option value="<?php echo $rec['type_id'] ?>"><?php echo $rec['category']."[".$rec['type_name']."]"; ?></option>
							<?php
						}
					?>
          			</select>
          		</div>
          		<div class="form-group">
          			<label>Item Name</label>
          			<input type="text" name="name" class="form-control" id="name" required>
           		</div>
           		<div class="form-group">
          			<label>Select spicy type</label>
          			<select name="spicy" class="form-control">
          				<option value="" selected>-Select Spicy-</option>
          				<option value="Low">Low</option>
          				<option value="Medium">Medium</option>
          				<option value="High">High</option>
          			</select>
           		</div>
           		<div class="form-group">
          			<label>Item Price</label>
          			<input type="text" name="price" class="form-control" id="price" required>
           		</div>
             	<div class="form-group">
          			<label>Select Item Image</label>
          			<input type="file" name="ff" class="form-control-file">
           		</div>
              		<input type="submit" name="ok" value="Add Item" class="btn btn-primary">
               </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>