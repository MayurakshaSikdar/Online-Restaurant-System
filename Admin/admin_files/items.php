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
        <li class="breadcrumb-item active">Items</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h3>All Items</h3>
          <a href="items_add.php" class="btn btn-warning">Add New Item</a>
          <br>
          <?php
		  $src="SELECT i.*, t.* FROM items_table i, type_table t WHERE i.type_id = t.type_id";
		  $rs=mysqli_query($con,$src)or die(mysqli_error($con));
		  if(mysqli_num_rows($rs)>0){
			  ?>
              <br>
              <table class="table table-bordered table-striped text-center">
              <thead>
              	<tr>
                	<th>Sr. No.</th>
                    <th>Name of the Item</th>
                    <th>Spicy</th>
                    <th>Price</th>
                    <th>Item Image</th>
                    <th>Type</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
              </thead>
              <tbody>
              	<?php
				$sl=1;
				while($row=mysqli_fetch_assoc($rs)){
					?>
                    <tr>
                    <td><?php echo $sl ?></td>
                    <td><?php echo $row['name']; ?></td>
                     <td><?php echo $row['spicy']; ?></td>
                      <td><?php echo $row['price']; ?></td>
                       <td><img src="<?php echo "../../".$row['fpath'] ?>" width="50"></td>
                        <td><?php echo $row['category']."[".$row['type_name']."]"; ?></td>
                        <td align="center"><a href="items_update.php?id=<?php echo $row['items_id'] ?>"><img src="../images/edit.png"></a></td>
            <td align="center"><a href="items_delete.php?id=<?php echo $row['items_id'] ?>"><img src="../images/delete.png"></a></td>

                    
                    </tr>
					<?php
					$sl++;
				}
				?>
              </tbody>
              </table>
			  <?php
		  }else{
			  echo "<br>No Items Found";
		  }
		  ?>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>