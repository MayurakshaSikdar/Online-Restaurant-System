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
        <li class="breadcrumb-item active">Update</li>
        </ol>
      <div class="row">
        <div class="col-12">
          <h3>Update category</h3>
        </div>
      </div>
      <?php
			$id=$_GET['id'];
			$src="SELECT * FROM type_table WHERE type_id=$id";
			$rs=mysqli_query($con,$src)or die(mysqli_error($con));
			$rec=mysqli_fetch_assoc($rs);
		?>
	<div class="col-6">
	<form method="post">
		<div class="form-group">
                	<label>Enter Name of the Type</label>
					<select name="type_name" class="form-control col-4">
                    <option>--Select Type--</option>
                    <?php 
						if($rec['type_name'] == "Veg")
						{
							echo '<option value="Veg" selected>Veg</option>';
							echo '<option value="Non-Veg">Non-Veg</option>';
						}
						elseif($rec['type_name'] == "Non-Veg")
						{
							echo '<option value="Veg">Veg</option>';
							echo '<option value="Non-Veg" selected>Non-Veg</option>';
						}
						else
						{
							echo '<option value="Veg">Veg</option>';
							echo '<option value="Non-Veg">Non-Veg</option>';
						}
					?>
					</select>
     	</div>
		 <div class="form-group">
			<label>Category Name</label>
			<input type="text" name="category" class="form-control" value="<?php echo $rec['category']?>">
		</div>

			<input type="submit" class="btn btn-primary" name="ok" value="Update">
	</form>
        <?php
				
				if(isset($_POST["ok"]))
				{
					$type_name = $_POST["type_name"];
					$category = $_POST["category"];
					$upd="UPDATE type_table SET type_name='$type_name', category='$category' WHERE type_id='$id'";
					$res = mysqli_query($con, $upd) or die(mysqli_error($con));
					$src="SELECT * FROM type_table WHERE type_id='$id' AND type_name='$type_name'";
					$rec = mysqli_query($con, $src) or die(mysqli_error($con));
					if(mysqli_num_rows($rec) == 1)
					{
						echo "<script>window.location='category.php';</script>";
						exit;
					}
					else
					{
						echo "Category Data Not Updated";
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