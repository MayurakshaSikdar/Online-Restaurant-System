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
        <li class="breadcrumb-item active">Category</li>
		
      </ol>
      <div class="row">
        <div class="col-12">
          <h3>All Category</h3>
          <a href="category_add.php" class="btn btn-warning">Add New Category</a>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
	<?php 
	$src = "SELECT * FROM type_table ORDER BY type_name DESC";
	$rs=mysqli_query($con,$src) or die(mysqli_error($con));
	if(mysqli_num_rows($rs)>0)
	{?>
<br>
<br>
   
   <script>
		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("cat_table");
		  switching = true;
		  // Set the sorting direction to ascending:
		  dir = "asc"; 
		  /* Make a loop that will continue until
		  no switching has been done: */
		  while (switching) {
			// Start by saying: no switching is done:
			switching = false;
			rows = table.rows;
			/* Loop through all table rows (except the
			first, which contains table headers): */
			for (i = 1; i < (rows.length - 1); i++) {
			  // Start by saying there should be no switching:
			  shouldSwitch = false;
			  /* Get the two elements you want to compare,
			  one from current row and one from the next: */
			  x = rows[i].getElementsByTagName("TD")[n];
			  y = rows[i + 1].getElementsByTagName("TD")[n];
			  /* Check if the two rows should switch place,
			  based on the direction, asc or desc: */
			  if (dir == "asc") {
				if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
				  // If so, mark as a switch and break the loop:
				  shouldSwitch = true;
				  break;
				}
			  } else if (dir == "desc") {
				if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
				  // If so, mark as a switch and break the loop:
				  shouldSwitch = true;
				  break;
				}
			  }
			}
			if (shouldSwitch) {
			  /* If a switch has been marked, make the switch
			  and mark that a switch has been done: */
			  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			  switching = true;
			  // Each time a switch is done, increase this count by 1:
			  switchcount ++; 
			} else {
			  /* If no switching has been done AND the direction is "asc",
			  set the direction to "desc" and run the while loop again. */
			  if (switchcount == 0 && dir == "asc") {
				dir = "desc";
				switching = true;
			  }
			}
		  }
		}
	</script>
   
    <div class="col-12">
	
	
		<table cellpadding="10" class="col-12 table-hover table-bordered text-center table-striped" id="cat_table">
			<thead class="text-white bg-dark">
				<tr>
					<th>Type<i class="fa float-right fa-sort-alpha-asc" onClick="sortTable(0)"></i></th>
					<th>Category<i class="fa float-right fa-sort-alpha-asc" onClick="sortTable(1)"></i></th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while($rec = mysqli_fetch_assoc($rs))
					{?>
						<tr>
							<td><?php echo $rec['type_name']?></td>
							<td><?php echo $rec['category']?></td>
							<td><a href="category_update.php?id=<?php echo $rec['type_id']; ?>"><img src="../images/edit.png"></a></td>
							<td><a href="category_delete.php?id=<?php echo $rec['type_id']; ?>"><img src="../images/delete.png"></a></td>
						</tr>
					<?php }?>
			</tbody>
		</table>
		<br><br>
		
	</div>	
	<?php } 
	else
	{
		echo "<br><br>&nbsp;&nbsp;&nbsp;No Category Found !";
	}?>
	
	<?php
	if(isset($_GET['msg'])){
	   echo "<br><br>&nbsp;&nbsp;".$_GET['msg'];
	}
	?>
   	<?php
	require("footer.php");
	?>
